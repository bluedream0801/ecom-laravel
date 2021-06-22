<!DOCTYPE html>
<html lang="{{ $locale }}" dir="{{ $localeDir }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Security-Policy" content="default-src 'self' https://cdnjs.cloudflare.com https://cdn.jsdelivr.net; style-src 'unsafe-inline' 'self' https://cdnjs.cloudflare.com https://cdn.jsdelivr.net; script-src 'unsafe-eval' 'self' https://cdnjs.cloudflare.com https://cdn.jsdelivr.net; img-src 'self' https://cdnjs.cloudflare.com https://cdn.jsdelivr.net https://demo.aimeos.org https://aimeos.org data:">

		<title>Aimeos administration interface</title>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4/css/font-awesome.min.css" />
@if( $localeDir == 'rtl' )
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/combine/npm/bootstrap@5/dist/css/bootstrap.rtl.min.css,npm/flatpickr@4/dist/flatpickr.min.css,npm/flatpickr@4/dist/plugins/confirmDate/confirmDate.min.css,npm/vue-select@3/dist/vue-select.min.css">
@else
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/combine/npm/bootstrap@5/dist/css/bootstrap.min.css,npm/flatpickr@4/dist/flatpickr.min.css,npm/flatpickr@4/dist/plugins/confirmDate/confirmDate.min.css,npm/vue-select@3/dist/vue-select.min.css">
@endif
		<link rel="stylesheet" href="<?= route( 'aimeos_shop_jqadm_file', ['site' => $site, 'locale' => 'en', 'type' => 'css'] ); ?>" />
		<style>
			body.dark .btn-theme.dark-mode {display:none}
			body.light .btn-theme.light-mode {display:none}
			.app-menu .icon {vertical-align: middle; padding: 0.5rem 1rem; font-size: 125%}
		</style>
	</head>
	<body class="{{ $theme }}">
		<div class="app-menu">
			<span class="menu"></span>
			<div class="app-menu-end">
				<i class="icon btn-theme light-mode fa fa-sun-o"></i><i class="icon btn-theme dark-mode fa fa-moon-o"></i>
				<i class="icon logout fa fa-sign-out" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"></i>
				<form id="logout-form" action="{{ route( 'logout', Request::get( 'locale', app()->getLocale() ) ) }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
			</div>
		</div>

<?= $content ?>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<script src="https://cdn.jsdelivr.net/combine/npm/bootstrap@5/dist/js/bootstrap.bundle.min.js,npm/vue@2/dist/vue.min.js,npm/vue-select@3/dist/vue-select.min.js,npm/flatpickr@4,npm/flatpickr@4/dist/l10n/index.min.js,npm/flatpickr@4/dist/plugins/confirmDate/confirmDate.min.js,npm/vue-flatpickr-component@8,npm/sortablejs@1,npm/vuedraggable@2"></script>
		<script src="https://cdn.jsdelivr.net/npm/ckeditor@4/ckeditor.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/ckeditor@4/adapters/jquery.js"></script>
		<script src="<?= route( 'aimeos_shop_jqadm_file', array( 'site' => $site, 'locale' => 'en', 'type' => 'js' ) ); ?>"></script>
	</body>
</html>
