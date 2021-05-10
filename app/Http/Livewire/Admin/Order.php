<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Order extends Component
{
    public $order;
    public $reward;
    public $level;
    public $maximum = 5;
    public $postState = false;
    public $message = '';

    public function mount()
    {
        $this->reward = $this->order->getUnitPrice();
        $this->maximum = $this->order->quantity;
    }

    public function render()
    {
        return view('livewire.admin.order');
    }

    public function togglePostState()
    {
        $this->postState = !$this->postState;
    }

    public function postJob()
    {
        $data = [
            'title' => $this->order->category,
            'category' => $this->order->category,
            'amount' => $this->reward,
            'social_proile_link' => $this->order->profile_link,
            'social_username' => $this->order->username,
            'link' => $this->order->link,
            'quantity' => $this->maximum,
            'level' => $this->level,
        ];

        $response = Http::asForm()->post('https://data2income.com/postajob/lalala', $data);
        if ($response->body() == 'success') {
            $this->message = 'Your post has been successfully added';
            $this->order->status = 'successful';
            $this->order->save();

            $this->dispatchBrowserEvent('sweetalert', [
                'icon' => 'success',
                'title' => 'Job posted',
                'text' => 'This Task now appears at Data2Income',
            ]);
        } else {
            $this->message = $response->body();
            $this->dispatchBrowserEvent('sweetalert', [
                'icon' => 'warning',
                'title' => 'An error occured!',
                'text' => $this->message,
            ]);
        }
    }
}
