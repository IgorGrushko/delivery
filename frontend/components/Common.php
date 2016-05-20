<?php
namespace frontend\components;

use yii\base\Component;

class Common extends Component{

    const EVENT_NOTIFY = 'notify_admin';

    public function sendMail($subject, $text, $emailTo='mr.pear@yandex.ru' , $nameTo='Delivery')
    {
        if  (\Yii::$app->mail->compose()
            ->setFrom([ \Yii::$app->params['supportEmail'] => \Yii::$app->name])
            ->setTo([$emailTo => $nameTo])
            ->setSubject($subject)
            ->setTextBody($text)
            ->send()
            )
        {
            $this->trigger(self::EVENT_NOTIFY);
            return true;
        }
    }

    public function notifyAdmin()
    {
        print "Notify Admin";
    }

}