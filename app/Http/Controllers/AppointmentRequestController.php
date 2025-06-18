<?php

namespace App\Http\Controllers;

use App\Mail\AppointmentRequestMail;
use App\Models\AppointmentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class AppointmentRequestController extends Controller
{
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'date' => 'nullable|date',
            'email' => 'required|email',
            'company' => 'required|string',
            'time' => 'nullable|string',
            'message' => 'required|string'
        ]);

        $validate['date'] = $validate['date'] ?? now()->toDateString();

        $appointment = AppointmentRequest::create($validate);

        // Email
        Mail::to('ameliapoetri31@gmail.com')->send(new AppointmentRequestMail($appointment));

        // // WhatsApp
        // $token = env('FONNTE_API_KEY');
        // $rawPhone = ['085894793957', '08999161805'];
        // $date = $request->date ?? '-';
        // $time = $request->time ?? '-';

        // $message = "Hallo {$request->name}, kami mengonfirmasi janji temu Anda dengan detail : \n\n"
        //     . "Date : {$date}\n"
        //     . "Company : {$request->company}\n"
        //     . "Time : {$time}\n"
        //     . "Message : {$request->message}.\n"
        //     . "Terima kasih atas perhatian dan kerjasama Anda. 🙏🏻\n\n"
        //     . "Salam hormat, Grootech.";

        // foreach ($rawPhone as $recipient) {
        //     $phone = $this->normalizePhone($recipient);

        //     $response = Http::withHeaders([
        //         'Authorization' => $token,
        //     ])->post('https://api.fonnte.com/send', [
        //         'target' => $phone,
        //         'message' => $message,
        //     ]);

        //     if (!$response->successful()) {
        //         logger()->error('Gagal kirim ke ' . $phone . ' => ' . $response->body());
        //     }
        // }

        return response()->json([
            'success' => true,
            'message' => 'Thank you! Your request has been successfully submitted.',
        ]);
    }

    private function normalizePhone($phone)
    {
        $phone = preg_replace('/[^0-9]/', '', $phone);

        if (strpos($phone, '0') === 0) {
            $phone = '62' . substr($phone, 1);
        }

        return $phone;
    }
}
