<?php

use App\UploadData;
use App\ContactForm;

Route::get('/', function () {
    $client = new SoapClient(env('WSDL'), [
        'cache_wsdl'         => WSDL_CACHE_NONE,
        'soap_version'       => SOAP_1_1,
    ]);

    $form = new ContactForm();
    $form->Address1 = '';
    $form->Address2 = '';
    $form->City = 'Parma';
    $form->Comments = 'test';
    $form->CompanyName = '';
    $form->Country = 'USA';
    $form->EPARegNumber = '';
    $form->EmailAddress = '';
    $form->EmailListAdd = false;
    $form->FaxNumber = '';
    $form->FirstName = 'Joe';
    $form->LastName = 'Campo';
    $form->LotCode = '';
    $form->MSDSProductName = '';
    $form->MSDSQuestion = false;
    $form->MSDSTransport = '';
    $form->PhoneNumber = '2168709092';
    $form->ProductComment = 'test';
    $form->ProductName = '';
    $form->ProductQuestion = true;
    $form->ProductRemaining = true;
    $form->PurchaseStore = 'Home Depot';
    $form->PurchaseStoreCity = 'Cleveland';
    $form->ReceiptAvailable = false;
    $form->State = 'Ohio';
    $form->Subject = 'test';
    $form->UPCCode = '123';
    $form->Website = 'spectracide.com';
    $form->Zip = '44129';

    $result = $client->UploadData(new UploadData($form));

    return response()->json($result);
});
