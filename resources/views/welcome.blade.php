
@extends('layouts.app')

@section('content')

<div id="msgSuccess" class="alert alert-success my-2"></div>

 <form id="msg">
 @csrf
 <div class="form-group">
   <input type="text" class="form-control" placeholder="name" name="name">
 </div>

  <div class="form-group">
   <textarea class="form-control" rows="5"  placeholder="message" name="msg"></textarea>
 </div>

 <button type="submit" class="btn btn-primary">Send</button>

 </form>

@endsection


@section('scripts')

<script>
$('#msgSuccess').hide()


$(#msg).submit(function(e){
  e.preventDefault()
  let msgData = new FormData($(#msg)[0])
  $.ajax({
    type:"POST",
    url:"{{ route('sendMessage')}}",
    data: msgData,
    contentType: false,
    processData: false,

    success: function(data)
    {
      $('#msgSuccess').text(data.success)

    },
    error: function(xhr, status, error)
    {
      $.each:(xhr.responseJSON.errors, function (key, item)
      {

      });
    }
  });

})
</script>

@endsection