@extends("layouts.app")

@section("title-blog")
Home Page
@endsection

@section("content")
<h1>Home Page</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore ducimus vitae ipsam, ad doloremque dolor error! Aperiam sapiente dolorem, nobis iure hic mollitia. Excepturi quisquam tenetur praesentium cumque laborum beatae.</p>
@endsection

@section("aside")
    @parent
    <p>Дополнительный текс</p>
@endsection