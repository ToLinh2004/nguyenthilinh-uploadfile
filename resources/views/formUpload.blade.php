<form action="<?php echo route('uploadFile');?>" method="post" enctype="multipart/form-data">
    @csrf
    <h1>Form Upload File PHP</h1>
    Tên file: <input type="file" name="image" id="">
    <button type="submit">UploadFile</button> 
    @if(!empty($fileName))
    <br>
        {!!$fileName!!}/
    @endif  
    @if(!empty($fileExtension))
        {!!$fileExtension!!} 
    @endif    
    @if(!empty($checkFile))
</br>
        {!!$checkFile!!}
    @endif

    @if(!empty($checkType))
    <br>
        {!!$checkType!!}
    @endif
</form>
