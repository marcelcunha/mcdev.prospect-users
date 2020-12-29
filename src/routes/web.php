<?php

Route::resource('prospect-user', 'ProspectUserController')->except('edit', 'update');
