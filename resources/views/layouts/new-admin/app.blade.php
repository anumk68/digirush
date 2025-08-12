<!doctype html>
<html lang="en" class="minimal-theme">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ custom_asset('front_assets/img/DigiRush_Solution.png')}}" type="image/png" />
    <link href="{{ custom_asset('new-admin/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{ custom_asset('new-admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}"
        rel="stylesheet" />
    <link href="{{ custom_asset('new-admin/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <link href="{{ custom_asset('new-admin/assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}"
        rel="stylesheet" />
    <link href="{{ custom_asset('new-admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    <link href="{{ custom_asset('/new-admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ custom_asset('/new-admin/assets/css/bootstrap-extended.css')}}" rel="stylesheet" />
    <link href="{{ custom_asset('/new-admin/assets/css/style.css')}}" rel="stylesheet" />
    <link href="{{ custom_asset('/new-admin/assets/css/icons.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="{{ custom_asset('new-admin/assets/css/pace.min.css')}}" rel="stylesheet" />
    <link href="{{ custom_asset('new-admin/assets/css/dark-theme.css')}}" rel="stylesheet" />
    <link href="{{ custom_asset('new-admin/assets/css/light-theme.css')}}" rel="stylesheet" />
    <link href="{{ custom_asset('new-admin/assets/css/semi-dark.css')}}" rel="stylesheet" />
    <link href="{{ custom_asset('new-admin/assets/css/header-colors.css')}}" rel="stylesheet" />
    <title>Digirush Solution - Admin Template</title>
    @yield('heads')
</head>

<body>
    <div class="wrapper">
        @include('layouts.new-admin.header')
        @include('layouts.new-admin.sidebar')
        @yield('content')
        <script src="{{custom_asset('/new-admin/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{custom_asset('/new-admin/assets/js/jquery.min.js')}}"></script>
        <script src="{{custom_asset('/new-admin/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
        <script src="{{custom_asset('/new-admin/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
        <script src="{{custom_asset('/new-admin/assets/plugins/easyPieChart/jquery.easypiechart.js')}}"></script>
        <script src="{{custom_asset('/new-admin/assets/plugins/peity/jquery.peity.min.js')}}"></script>
        <script src="{{custom_asset('/new-admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
        <script src="{{custom_asset('/new-admin/assets/js/pace.min.js')}}"></script>
        <script src="{{custom_asset('/new-admin/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{custom_asset('/new-admin/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
        <script src="{{custom_asset('/new-admin/assets/js/table-datatable.js')}}"></script>
        <script src="{{custom_asset('/new-admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script
            src="{{custom_asset('/new-admin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
        <script src="{{custom_asset('/new-admin/assets/js/app.js')}}"></script>
        <script src="{{custom_asset('/new-admin/assets/js/index.js')}}"></script>
        <script>
            new PerfectScrollbar(".best-product")
            new PerfectScrollbar(".top-sellers-list")
        </script>
        <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                ClassicEditor
                    .create(document.querySelector('#editor'), {
                        toolbar: [
                            'heading', '|',
                            'bold', 'italic', 'link', '|',
                            'numberedList', 'bulletedList', '|',
                            'blockQuote', 'insertTable', 'mediaEmbed', '|',
                            'undo', 'redo', 'imageUpload' // Ensure 'imageUpload' is included
                        ],
                        heading: {
                            options: [
                                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                                { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                                { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                                { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                                { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                            ]
                        },
                        ckfinder: {
                            uploadUrl: '{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}'
                        },
                        mediaEmbed: {
                            previewsInData: true
                        }
                    })
                    .then(editor => {
                        console.log('Editor initialized successfully.', editor);
                    })
                    .catch(error => {
                        console.error('Error initializing CKEditor:', error);
                    });
            });

            document.addEventListener('DOMContentLoaded', function () {
                ClassicEditor
                    .create(document.querySelector('#editor2'), {
                        toolbar: [
                            'heading', '|',
                            'bold', 'italic', 'link', '|',
                            'numberedList', 'bulletedList', '|',
                            'blockQuote', 'insertTable', 'mediaEmbed', '|',
                            'undo', 'redo', 'imageUpload' // Ensure 'imageUpload' is included
                        ],
                        heading: {
                            options: [
                                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                                { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                                { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                                { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                                { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                            ]
                        },
                        ckfinder: {
                            uploadUrl: '{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}'
                        },
                        mediaEmbed: {
                            previewsInData: true
                        }
                    })
                    .then(editor => {
                        console.log('Editor initialized successfully.', editor);
                    })
                    .catch(error => {
                        console.error('Error initializing CKEditor:', error);
                    });
            });

            document.addEventListener('DOMContentLoaded', function () {
                ClassicEditor
                    .create(document.querySelector('#editor3'), {
                        toolbar: [
                            'heading', '|',
                            'bold', 'italic', 'link', '|',
                            'numberedList', 'bulletedList', '|',
                            'blockQuote', 'insertTable', 'mediaEmbed', '|',
                            'undo', 'redo', 'imageUpload' // Ensure 'imageUpload' is included
                        ],
                        heading: {
                            options: [
                                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                                { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                                { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                                { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                                { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                            ]
                        },
                        ckfinder: {
                            uploadUrl: '{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}'
                        },
                        mediaEmbed: {
                            previewsInData: true
                        }
                    })
                    .then(editor => {
                        console.log('Editor initialized successfully.', editor);
                    })
                    .catch(error => {
                        console.error('Error initializing CKEditor:', error);
                    });
            });
            document.addEventListener('DOMContentLoaded', function () {
                ClassicEditor
                    .create(document.querySelector('#editor4'), {
                        toolbar: [
                            'heading', '|',
                            'bold', 'italic', 'link', '|',
                            'numberedList', 'bulletedList', '|',
                            'blockQuote', 'insertTable', 'mediaEmbed', '|',
                            'undo', 'redo', 'imageUpload' // Ensure 'imageUpload' is included
                        ],
                        heading: {
                            options: [
                                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                                { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                                { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                                { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                                { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                            ]
                        },
                        ckfinder: {
                            uploadUrl: '{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}'
                        },
                        mediaEmbed: {
                            previewsInData: true
                        }
                    })
                    .then(editor => {
                        console.log('Editor initialized successfully.', editor);
                    })
                    .catch(error => {
                        console.error('Error initializing CKEditor:', error);
                    });
            });
        </script>

        @yield('scripts')
</body>

</html>