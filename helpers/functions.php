<?php 

function generateAlert($response){
    
    if ($response) {
       return [
            'status' => 'success',
            'text' => 'Success! you are subscribe.'
        ];
    } 
        return [
            'status' => 'danger',
            'text' => 'Error! your email is incorrect.',
        ];
   
    
};

function checkEmail($email)
{
    if (str_contains($email, '@') && str_contains($email, '.')) {
        return true;
    }
    return false;
}
