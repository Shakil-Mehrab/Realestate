@if(!empty($notification->data['property']['title']))
    <a class="dropdown-item" href="{{route('comment.show',$notification->data['property']['id'])}}">
        {{$notification->data['user']['name']}} commented on <strong> {{$notification->data['property']['title']}}</strong> 
        </a> 
    @endif  
   