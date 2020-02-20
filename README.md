
# Flash Message

> **Configuration File** 
> Irfa/Flashmsg/config.php

  
**<h2>Basic Usage</h2>**
 

     <?php 
      require_once 'Autoloader.php';
      use Irfa\Flashmsg\Flash;
      ...

<h2>Set Flash Message</h2>

> You are free to set this message type, change css class or message
> view in config file.
> 
>  Flash::set(key , message, type);

   

        ...
        ///SET FLASH Fail
          Flash::set('fail-msg' , 'Description is required','fail');
          ///SET FLASH Success
          Flash::set('success-msg' , 'Update Success','success'); 
          ///SET FLASH Info
          Flash::set('info-msg' , 'Please wait 1 minutes','success');
          ///SET FLASH Warning
          Flash::set('warning-msg' , 'Username or Password Invalid','warning');
          ///SET FLASH general
          Flash::set('general-msg' , 'Hello, i'm Message','general');
          ///SET FLASH Other
          Flash::set('other-msg' , 'Just Other Message','other');
          ...

<h2>Get Flash Message</h2>

> Flash::get(key);

     ...
     ///GET FLASH MESSAGE
      Flash::get('msg');
     ...


