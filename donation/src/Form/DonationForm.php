<?php

namespace Drupal\donation\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;


class DonationForm extends FormBase {
	
	public function getFormId(){
		return 'donation_form';
	}

	public function buildForm(array $form, FormStateInterface $form_state){
			
		// creating fieldset for donor information
		$form['donor_information'] = [
      		'#type' => 'fieldset',
      		'#title' => $this->t('Donor Information'),
    	];

    	$form['donor_name'] = [
    		'#type' => 'textfield',
    		'#title' => $this->t('Full Name'),
    		'#required' => TRUE,
    	];


    	$form['donor_email'] = [
    		'#type' => 'email',
    		'#title' => $this->t('e-Mail'),
    		'#required' => TRUE,
    	];

    	$form['donor_phone'] = [
			 '#type' => 'tel',
			 '#title' => $this->t('Mobile'),
		];

    	$form['donor_address'] = [
    		'#type' => 'textfield',
    		'#title' => $this->t('Address'),
    		// '#required' => TRUE,
    	];    

    	$form['donor_dob'] = [
    		'#type' => 'date',
    		'#title' => $this->t('Date of Birth'),
    		'#default_value' => array(
    				'year' => 2020,
    				'month' => 2,
    				'day' => 15,
    			),

    	];

    	$form['actions']['submit'] = [
	      '#type' => 'submit',
	      '#value' => $this->t('Submit'),
	    ];
	
    	return $form;


	}

    public function validateForm(array &$form, FormStateInterface $form_state) {

   			

    }

  public function submitForm(array &$form, FormStateInterface $form_state) {
  		
  			
   }

 }

