<?php
    require_once 'utils/utils.php';
    include_once 'view/shared/header.php';
    require_once 'controller/ContactController.php';
    $contactCtrl = new ContactController();
    $contactCtrl->viewManager();
    include_once 'view/shared/footer.php';