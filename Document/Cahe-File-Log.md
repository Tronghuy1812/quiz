### Cache in Laravel 
- put 
    ex: Cache::put('cacheKey', value , expire_time) 

- forever "hạn chế dùng " lưu vính viễn
    ex: Cache::forever('key',value)

- forget 
    Xóa dữ liệu của 1 cache key 
    ex : Cache::forget('key')


- flush
    Xóa tất cả các key cache
    Ex : Cache::flush()

- Store('drive') Luu chỉ định drỉve

    ex: Cache::store('redis')->put('bar', 'baz', 600); 
- kiểm tra 1 cache có tồn tại không
    ex : Cache::has('cachekey') 

### Upload file
- config/filesystem.php

- Request File
    + getClientOriginalName() : Ten file
    + extentiosn() : Đuôi file(mở rộng file)
    + getRealPath()

    ex:  dd($request->image->getClientOriginalName(),$request->image->extension(),$request->image->getRealPath());

- link ảnh từ storage ra public 
    php artisan storage:link

- Đóng  dấu ảnh sử dụng ảnh bản quyền 
    https://websolutionstuff.com/post/laravel-8-add-watermark-on-image

### Log
use Illuminate\Support\Facades\Log;
-  info()
    ex: Log::info('string message', array data);

-   Log::emergency($message, array $data=[]);
    Log::alert($message, array $data=[]);
    Log::critical($message, array $data=[]);
    Log::error($message, array $data=[]);
    Log::warning($message, array $data=[]);
    Log::notice($message, array $data=[]);
    Log::info($message, array $data=[]);
    Log::debug($message, array $data=[]);

### Collection
- Create colection
    collect([])

### Translate