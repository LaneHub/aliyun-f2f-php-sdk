<?php
$config = array (
		//签名方式,默认为RSA2(RSA2048)
		'sign_type' => "RSA2",

		//支付宝公钥
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAt5O3pUiV8UAVJhHxhgAUX8FfCKR1hsvOeWf4IYrJyUvMbhS5wpGWBcr58T/Ipeu1KJs4CksA7ZsEl5FA3abHQ7hakupq5qm6Yh7s9xobgq+DLHyKhgtGmq7iC1LgxCpbbwyWNNnzeARmAuhPt6PifrHLPk004EOddiGrQa1G5G/BxsuoFIgFH2WL3wdWtvFzFXEQucCkFfgk7K9U1dS8GKIKpsM8ZXUaEugpBpC+ib/3c7CTLv/CLuFrlO8C0yXEKG1bsi+pE59yPgKYo9ki3Cid/hqJi09YxDuOGheqFqFEiTQsFmc3kwGRY4PEAoin+iYyFzBq1iyWkx7vc3aI9QIDAQAB",

		//商户私钥
		'merchant_private_key' => "MIIEowIBAAKCAQEAvbEi6zTep04LlIDkmVrXH4ltz1MBtCv6l9vrsseyfBMVq82uQNJGNBkjPO0xothbME1wU1IoAFybmtLYV+y/sJqmJ7m+cAoTKQeV2Pp1TyQMV7hu+5lTHMwyh2Yqe5aLFFocnvVGWBua7JYRE1xGxeEPdJ0CmWrqVAufiz8e20rg5WWOLBND4/XP8iesEMGFUnBjigpXb7c9l67zMq3r0DIzbUlmN7cCl4wjjDDF4VLeeyikW0q1xECBldys9et12N55k8eKvWtKgcB4qhEDhr2/1St7H/ZI+ye8mefe3hREfzGQK5PvrOLNPH1CkBmomjfKQQKBsgpn4pjA3COCSQIDAQABAoIBADWa0RtWnXT6ARu+MNuFaDVpSLbF5j1cEDzJ0Rl8hVu6qO0b+pom0d/3GpYlEVnLejl0KMHi/ZrckLx3yNtP8/ucOEgRnVdcAX4evqHKZUwwC6zeWb6P3YTNz5mjrW2vZS4jKONivLY5VtZ0se6erQFOUGfL1ugz5nRJtJRNChM94RuYZyqJ+EWwQngtU7VGbV6cYjxV1OIoHgrOHUoUxhiCN++UF9MA4f09+gESwvqGD1sQ6o3eoGM7zUL5jzVBcJ57Tx6n3MfU6e04UmcP52Xp3FuH524IevFewFzG7W/li6KswlomoDCp3sqBpum//oJBF7xyWVLkcDdRWLjqRuECgYEA5Rzg7j7IqvIKuIBXGfMHYxbTPI/OKmlDlPAy5AN4alEaKlxurCWHpRdyxa1xTVrdV1i3Ea2r92qOZ4fsCAlW92/1PJEdcfGa33SvErQ5Qruu6nreteV1Q2117AP3JrDbfQu4uAN524skGfbqSKnjFi/a1spvPuPLQYBrJv0EP+cCgYEA0/P01BTdTWviWnOyjI0OB5+OiyfnrGrKy6sv3cBD/WMcrHufPcm+R73OEemhOcBj606sU1Sx5gYlw9EGZiEZHMQWf/8jzSlYFFMJOGiYoaOP9pBQ7oEq+XlvOEOQ0DB/gOVeA4UzCb8v1ZpGUoo5HJ0EA8C/ahnOT+kttgn8pk8CgYBO7XjrekOE6GcbElNvRBLKZwWUOnIqmCLI/0p41F06OwBJkZgqw68MB5zpTovWuzO/MHe4ply0mke+kMuWJSmJik8wc0lyhGn3Cup5Bg8n1yI18uggP5D7Do1uJhuRf6HNXSlgcwoawL9KFo61Q5lQfmHkVs6mGrFdulCvmMBLBwKBgQCPeWVypskDXpMz3Xuwzs7/dA+evR2DRisO4UuelUaw4IWJcIlj3wvSLnavA3Ji0IwSvgfCxONDrUelHPpy6dbA9S+x5zkJ6QG5iFgGei9Pw5NxOVG/kWpQw9X4xSvi8eFtlFYmleTtpSCxPCR8PRrZ9qPAEprALMXOrC6IOoxu2wKBgHDyF7nra9prT/YhfWxiRIh+7VzcTagyBv4a0OzVO0YYFwSlGv2w5VHJwPntUaSCGS1PB/4D9nMx9S+J+B2lwFcfngJF3pqW8LAF4nFd1vFOCPQxvYHkIenkrf+y+Ve+wlxx6mt5mVzvCWvpt1E+SKmvlmnaT3LqUTLyHWLKAPnp",

		//编码格式
		'charset' => "UTF-8",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipay.com/gateway.do",

		//应用ID
		'app_id' => "2018101261606983",

		//异步通知地址,只有扫码支付预下单可用
		'notify_url' => "http://www.baidu.com",

		//最大查询重试次数
		'MaxQueryRetry' => "10",

		//查询间隔
		'QueryDuration' => "3"
);