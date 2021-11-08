<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Lara</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/add_ads.css">
    <link rel="icon" type="image/png" href="img/favicon.png" />
</head>

<body>

    <header>
        <a href="#"><img id="header_logo" src="img/logo.png"></a>

        <div class="header_center">
            <form id="header_form">
                <input id="header_searchbar_button" type="image" src="img/search.png" value="Search...">
                <input id="header_searchbar_search" type="text" name="search">
            </form>
        </div>

        <a id="header_button_log" href="/registration">Sign up </a>
        <a id="header_button_log" href="/login"> Log in</a>
    </header>

    <section id="add">
        <h1 id="add_title">Your advertising</h1>
        <form method="post" action="{{ route('ad.store') }}" enctype="multipart/form-data" id="add_form">
            {{-- Laravel 8 --}}
            @csrf {{-- Laravel 8 --}}

            <div id="add_form_div">
                <div id="add_form_image">
                    <input id="add_form_image_upload" type="file" name="upload_img">
                </div>
                @if ($errors->has('upload_img')) {{-- Laravel 8 --}}
                    <span class="error">{{ $errors->first('upload_img') }}</span>
                @endif
            </div>

            <div class="add_form_div">
                <label class="add_form_content">
                    <h2 class="add_form_content_h2">Title:</h2>
                    <input class="add_form_content_input" type="text" name="title">
                </label>
                @if ($errors->has('title')) {{-- Laravel 8 --}}
                    <span class="error">{{ $errors->first('title') }}</span>
                @endif
            </div>

            <div class="add_form_div">
                <label class="add_form_content">
                    <h2 class="add_form_content_h2">Describe:</h2>
                    <textarea class="add_form_content_textarea" rows="4" cols="50" name="description"></textarea>
                </label>
                @if ($errors->has('description')) {{-- Laravel 8 --}}
                    <span class="error">{{ $errors->first('description') }}</span>
                @endif
            </div>

            <div class="add_form_div">
                <label class="add_form_content">
                    <h2 class="add_form_content_h2">Category:</h2>
                    <select class="add_form_category_select" name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </label>
                @if ($errors->has('category_id')) {{-- Laravel 8 --}}
                    <span class="error">{{ $errors->first('category_id') }}</span>
                @endif
            </div>

            <div class="add_form_div">
                <label class="add_form_content">
                    <h2 class="add_form_content_h2">Location:</h2>
                    <input class="add_form_content_input" type="text" name="localisation">
                </label>
                @if ($errors->has('localisation')) {{-- Laravel 8 --}}
                    <span class="error">{{ $errors->first('localisation') }}</span>
                @endif
            </div>

            <div class="add_form_div">
                <label class="add_form_content">
                    <h2 class="add_form_content_h2">Price:</h2>
                    <input class="add_form_content_input" type="number" name="price">
                    <p>€</p>
                </label>
                @if ($errors->has('price')) {{-- Laravel 8 --}}
                    <span class="error">{{ $errors->first('price') }}</span>
                @endif
            </div>

            <button id="form_button" type="submit">Upload</button>

        </form>
    </section>
</body>

</html>
