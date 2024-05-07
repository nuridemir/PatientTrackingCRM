<?php

namespace App\View\Components\Backend;

use App\Models\Appointment;
use App\Models\Customer;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UpcomingAppointments extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $upcomingAppointments = Appointment::where('deleted', 0)
            ->where('status', 'waiting')
            ->orderBy('appointment_date')
            ->take(5)
            ->get();

        $customers = [];
        foreach ($upcomingAppointments as $appointment) {
            $customerId = $appointment->customer_id;
            $customer = Customer::where('id', $customerId)->first();
            array_push($customers, $customer);
        }


        return view('components.backend.upcoming-appointments', compact('upcomingAppointments', 'customers'));
    }
}
