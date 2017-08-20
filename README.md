# SendMessage_by_Aliyun_for_Laravel5
use Aliyun SDK to send messages for Laravel 5

###安装  
在终端输入以下命令进行安装

```shell
composer require lichmaker/send_message_by_aliyun_for_laravel5 dev-master
```

###配置
在`config/app.php`中的相应位置，添加以下代码：

```php
  'providers' => [
  
  ......
  
  Lichmaker\MessagesSender\MessagesSenderServiceProvider::class,
  ],
  
  'aliases' => [
  
  ......
  
  'MessagesSender' => Lichmaker\MessagesSender\Facade\MessagesSenderFacade::class,
  ],
```

在.env文件中，添加阿里云的accesskeyID和accesskeySECRET

```
ALIYUN_ACCESSKEYID=(填入阿里云账户accesskeyID)
ALIYUN_ACCESSKEYSECRET=(填入阿里云账户accesskeySECRET)

```

###使用方法

1、使用前请先前往阿里云官网开通短信发送服务，获取短信模板代码和短信签名。

2、使用例子：

```php
use MessagesSender;

class HomeController extends Controller
{
    public function home()
    {
        $demo = new MessagesSender();

        $response = $demo::sendSms(
            "短信签名", // 短信签名
            "SMS_*******", // 短信模板编号
            "15602******", // 短信接收者
            Array(  // 短信模板中字段的值
                "name"=>"lichmaker",
                "score"=>"1",
                "code" =>"1234"
            )
        );
        
        //打印发送成功or失败回调
        print_r($response);
    }
}

```

3、还有更多其他功能将会在以后的更新推出
