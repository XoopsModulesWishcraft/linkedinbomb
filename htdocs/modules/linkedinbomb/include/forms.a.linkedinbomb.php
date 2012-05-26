<?php

	function linkedinbomb_get_email() {
		
		xoops_loadLanguage('forms', 'linkedinbomb');
		
		$sform = new XoopsThemeForm(_FRM_LINKEDIN_FORM_GET_EMAIL, 'email', 'getemail.php', 'post');
		
		if (empty($id)) $id = '0';
		
		$ele = array();	
		$ele['op'] = new XoopsFormHidden('op', 'email');
		$ele['fct'] = new XoopsFormHidden('fct', 'save');
		$ele['id'] = new XoopsFormHidden('id', $id);
		
		$ele['email'] = new XoopsFormText(_FRM_LINKEDIN_FORM_EMAIL, 'email', 26,128);
		$ele['email']->setDescription(_FRM_LINKEDIN_FORM_DESC_EMAIL);
		
		$ele['submit'] = new XoopsFormButton('', 'submit', _SUBMIT, 'submit');
		
		$required = array('email');
		
		foreach($ele as $id => $obj)			
			if (in_array($id, $required))
				$sform->addElement($ele[$id], true);			
			else
				$sform->addElement($ele[$id], false);
		
		return $sform->render();
		
	}	