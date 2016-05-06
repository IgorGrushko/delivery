<?php
namespace frontend\components;

use yii\base\Component;

class Common extends Component{

    const EVRNT_NOTIFY = 'notify_admin';

    public function sendMail($email, $subject, $body, $name='')
    {
/*        \Yii::$app->mail->compose()
            ->setFrom([ \Yii::$app->params['supportEmail'] => \Yii::$app->name])
            ->setTo([$email => $name])
            ->setSubject($subject)
            ->setTextBody($body)
            ->send();*/

        $this->trigger(self::EVRNT_NOTIFY);
    }

    public function notifyAdmin()
    {
        print "Notify Admin";
    }

}