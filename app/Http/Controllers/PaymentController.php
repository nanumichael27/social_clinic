<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    //
    protected function verifyTransaction(Request $request)
    {
        $transaction = json_decode($request->transaction);
        $tx_ref = $transaction->tx_ref;
        $payment_ref = $transaction->transaction_id;

        $trans = Transaction::firstWhere('tx_ref', $tx_ref);
        $trans->payment_ref = $payment_ref;

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/$payment_ref/verify",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
                "Authorization: Bearer FLWSECK_TEST-6496ddccbe6463320d6ae8bbb951023c-X"
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        // echo $response;

        $res = json_decode($response);

        if($res->status)
        {
          $amountPaid = $res->data->charged_amount;
          $amountToPay = $res->data->meta->amount;
          if($amountPaid >= $amountToPay && $trans->status != 'successful')
          {
              $trans->status = "successful";
              $trans->save();
              Auth::user()->fundAccount($trans->amount);
              return 'success';

              //* Continue to give item to the user
          }
          else
          {
            $trans->status = "rejected";
            $trans->save();
              return 'Fraud transaction detected';
          }
        }
        else
        {
            $trans->status = "Can't process";
            $trans->save();
            return 'Can not process payment';
        }
  



    }

    //returns the refrence of the transaction
    public function createTransaction(Request $request)
    {
        $amount = $request->amount;
        $tx_ref = Auth::user()->createTransaction($amount);
        return $tx_ref;
    }
}
