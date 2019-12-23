<?php

namespace LoginMask\Providers;

use Plenty\Plugin\ServiceProvider;
use Plenty\Modules\Webshop\Template\Providers\TemplateServiceProvider;

class LoginMaskServiceProvider extends TemplateServiceProvider
{
	public function register() 
	{

	}
	public function boot()
    {    
		{
			$this->overrideTemplate("Ceres::Customer.Components.LoginView", "LoginMask::content.LoginView");
		}		   
		{
			$this->overrideTemplate("Ceres::Customer.Components.GuestLogin", "LoginMask::content.GuestLogin");
		}
		{
			$this->overrideTemplate("Ceres::Customer.Components.Login", "LoginMask::content.Login");
		}
	}	
}