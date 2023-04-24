{{-- user info and avatar --}}
<div class="avatar av-l chatify-d-flex" style="background-image: url({{url('assets/img/users/'.auth()->user()->profile_Image)}})"></div>
<p class="info-name">{{auth()->user()->first_Name}} {{auth()->user()->last_Name}}</p>
<div class="messenger-infoView-btns">
    <a href="#" class="danger delete-conversation">Delete Conversation</a>
</div>
{{-- shared photos --}}
<div class="messenger-infoView-shared">
    <p class="messenger-title"><span>Shared Photos</span></p>
    <div class="shared-photos-list"></div>
</div>
