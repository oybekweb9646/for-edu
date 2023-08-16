
<style>
    /* generic */

    body {
        background-color:#eee;
        color:#444;
        font-family:sans-serif;
    }

    .list ul:nth-child(odd) {
        background-color:#ddd;
    }

    .list ul:nth-child(even) {
        background-color:#fff;
    }

    /* big */
    @media screen and (min-width:600px) {

        .list {
            display:table;
            margin:1em;
        }

        .list ul {
            display:table-row;
        }

        .list ul:first-child li {
            background-color:#444;
            color:#fff;
        }

        .list ul > li {
            display:table-cell;
            padding:.5em 1em;
        }

    }

    /* small */
    @media screen and (max-width:599px) {

        .list ul {
            border:solid 1px #ccc;
            display:block;
            list-style:none;
            margin:1em;
            padding:.5em 1em;
        }

        .list ul:first-child {
            display:none;
        }

        .list ul > li {
            display:block;
            padding:.25em 0;
        }

        .list ul:nth-child(odd) > li + li {
            border-top:solid 1px #ccc;
        }

        .list ul:nth-child(even) > li + li {
            border-top:solid 1px #eee;
        }

        .list ul > li:before {
            color:#000;
            content:attr(data-label);
            display:inline-block;
            font-size:75%;
            font-weight:bold;
            text-transform:capitalize;
            vertical-align:top;
            width:50%;
        }

        .list p {
            margin:-1em 0 0 50%;
        }

    }

    /* tiny */
    @media screen and (max-width:349px) {

        .list ul > li:before {
            display:block;
        }

        .list p {
            margin:0;
        }

    }

    .title::before,.title::after {
        position: absolute;
        content: "";
        height: 16px;
        width: 16px;
        border-radius: 50%;
        left: 0px;
        background-color: royalblue;
    }

    .title::before {
        width: 18px;
        height: 18px;
        background-color: royalblue;
    }

    .title::after {
        width: 18px;
        height: 18px;
        animation: pulse 1s linear infinite;
    }

    .message, .signin {
        color: rgba(88, 87, 87, 0.822);
        font-size: 14px;
    }
    .form label {
        position: relative;
        margin: 3px;
    }

    .form label .input {
        width: 100%;
        padding: 10px 10px 20px 10px;
        outline: 0;
        border: 1px solid rgba(105, 105, 105, 0.397);
        border-radius: 10px;
    }

    .form label .input + span {
        position: absolute;
        left: 10px;
        top: 15px;
        color: grey;
        font-size: 0.9em;
        cursor: text;
        transition: 0.3s ease;
    }

    .form label .input:placeholder-shown + span {
        top: 15px;
        font-size: 0.9em;
    }

    .form label .input:focus + span,.form label .input:valid + span {
        top: 30px;
        font-size: 0.7em;
        font-weight: 600;
    }

    .form label .input:valid + span {
        color: green;
    }

    .submit {
        border: none;
        outline: none;
        background-color: royalblue;
        border-radius: 10px;
        color: #fff;
        font-size: 16px;
        width: 70px;
        transform: .3s ease;
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="list">
    <ul>
        <li>Ism Familiya</li>
        <li>Talim Yo'nalish</li>
        <li>Telefon raqam</li>
        <li>O'qilgan</li>
        <li>Qabul qilish</li>
    </ul>
    @foreach ($posts as $post)
    <ul>
        <li data-label="first name">{{$post->full_name}}</li>
        <li data-label="last name">{{$post->direction}}</li>
        <li data-label="country">{{$post->phone}}</li>
        <li data-label="country">{{$post->is_read ? 'ha' : 'yo\'q'}}</li>
        @if($post->is_read)
            <li data-label="number">{{$post->operator_name}}  {{$post->conclusion}}</li>
        @else
            <form class="form" action="{{route('info.update',['post' => $post->id])}}" style="display: flex" method="POST">
                @csrf
                <label>
                    <input required placeholder="Operator ismi" type="text" name="operator_name" class="input">
                </label>
                <label>
                    <input required placeholder="Xulosa" type="text" name="conclusion" class="input">
                </label>
                <button class="submit">Send</button>
            </form>
        @endif
    </ul>
    @endforeach

    {{ $posts->links() }}
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
