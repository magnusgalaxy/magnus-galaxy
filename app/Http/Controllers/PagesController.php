<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnquiryRequest;
use App\Models\Enquiry;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function sendEnquiry(EnquiryRequest $request){
        $data = $request->only(['name', 'email', 'message']);

        Enquiry::create($data);

        return redirect()
            ->back()
            ->with([
                'success' => 'Thanks for contacting, your message has been received.'
            ]);
    }
}
