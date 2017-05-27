<?php
namespace App\Wechats;

use EasyWeChat\Message\Text;

class Messages
{

    private $text;

    public function __construct(Text $text)
    {
        $this->text = text;
    }

    public static function messageHandler($message)
    {

        switch ($message->MsgType) {
            case 'event':
                return '收到事件消息';
                break;
            case 'text':
                return '谢谢你的留言，我还太小，没学会回复呢……';
                break;
            case 'image':
                return '谢谢你的留言，我还太小，没学会回复呢……';
                break;
            case 'voice':
                return '谢谢你的留言，我还太小，没学会回复呢……';
                break;
            case 'video':
                return '谢谢你的留言，我还太小，没学会回复呢……';
                break;
            case 'location':
                return '谢谢你的留言，我还太小，没学会回复呢……';
                break;
            case 'link':
                return null;
                break;
            // ... 其它消息
            default:
                return null;
                break;
        }
    }
}
