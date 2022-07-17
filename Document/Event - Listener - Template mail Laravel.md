1. Event
    php artisan make:event Name
2. Listenner
    php artisan make:listener Name

3. Template mail
    - Make mail Template
        php artisan make:mail Order --markdown=emails.orders.checkout 
    - Generate mail template 
        php artisan vendor:publish

* Note
+ return redirect()->back()->with('message', 'Login failed!'); : flash session
+ khi dùng listenner và event : khi dùng gửi mail xác nhận đơn hàng đã đặt bóc tách giữa việc login và gửi đơn hàng hoặc event còn dùng cùng Queue-job giúp vừa login xong gửi luôn mail không bị tắc nghẽn (chạy bất đồng bộ Queue)