<?php

Route::get('prospects/resend/{prospect}', 'ProspectUserController@resend')->name('prospect.resend');
Route::resource('prospects', 'ProspectUserController')->except('edit', 'update');
