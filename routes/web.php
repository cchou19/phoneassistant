<?php

Route::post('/alexa/intent', 'IntentController@processIntent');

Route::post('/twilio/callback', 'IntentController@processCall')->name('twilio.callback');
