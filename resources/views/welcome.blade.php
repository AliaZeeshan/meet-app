<x-layouts.frontend>
    <x-alert style="color: pink;text-align: center;background-color: crimson;padding-top: 10px;padding-right: 5px;" class="bg-danger" first-Name="layouts with component" alert-Style=""></x-alert>
    <div class="errors">
        @if($errors->any())
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                {{$error}}
            </div>
                @endforeach
            @endif
    </div>
    <form method="post" action="{{route('posts.store')}}">
        @csrf
        <x-forms.input type="text" name="name" label="name" placeholder="enter your name" />
        <x-forms.input type="email" name="email" label="email" placeholder="enter your email" />
        <x-forms.input type="checkbox" />
        <x-forms.input type="radio" />
        <x-forms.input type="file" name="thumbnail" label="thumbnail" />
        <x-forms.button type="submit" text="submit" />

    </form>
</x-layouts.frontend>
