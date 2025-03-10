@if($enabled)
<script>
window.dataLayer = window.dataLayer || [];
</script>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','{{ $id }}');</script>
<script>
    function gtmPush() {
        @unless(empty($dataLayer->toArray()))
        window.dataLayer.push({!! $dataLayer->toJson() !!});
        @endunless
        @foreach($pushData as $item)
        window.dataLayer.push({!! $item->toJson() !!});
        @endforeach
    }
    gtmPush();
</script>
@endif


