@extends('layouts.dashboard')
@section('page_title')
 Ads Code
@endsection
@section('content')
<script src="https://cdn.jsdelivr.net/npm/web3@latest/dist/web3.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style media="screen">
/*

Monokai Sublime style. Derived from Monokai by noformnocontent http://nn.mit-license.org/

*/

.hljs {
display: block;
overflow-x: auto;
padding: 0.5em;
background: #23241f;
}

.hljs,
.hljs-tag,
.hljs-subst {
color: #f8f8f2;
}

.hljs-strong,
.hljs-emphasis {
color: #a8a8a2;
}

.hljs-bullet,
.hljs-quote,
.hljs-number,
.hljs-regexp,
.hljs-literal,
.hljs-link {
color: #ae81ff;
}

.hljs-code,
.hljs-title,
.hljs-section,
.hljs-selector-class {
color: #a6e22e;
}

.hljs-strong {
font-weight: bold;
}

.hljs-emphasis {
font-style: italic;
}

.hljs-keyword,
.hljs-selector-tag,
.hljs-name,
.hljs-attr {
color: #f92672;
}

.hljs-symbol,
.hljs-attribute {
color: #66d9ef;
}

.hljs-params,
.hljs-class .hljs-title {
color: #f8f8f2;
}

.hljs-string,
.hljs-type,
.hljs-built_in,
.hljs-builtin-name,
.hljs-selector-id,
.hljs-selector-attr,
.hljs-selector-pseudo,
.hljs-addition,
.hljs-variable,
.hljs-template-variable {
color: #e6db74;
}

.hljs-comment,
.hljs-deletion,
.hljs-meta {
color: #75715e;
}

</style>
<div class="content-body">
    <div class="container-fluid">
        @include('Alerts.alerts')
        <div id="alert">
        </div>
        <div class="">
            <div class="widget-content widget-content-area border-top-tab">
                <div class="tab-content" id="borderTopContent">
                  <strong>Put these on anywhere on your website (these will show ads where ever you put) : </strong>
                  <br>
                    <pre class="hljs xml" style="border-radius: 15px">

                      <span class="hljs-tag"><</span><span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"ads_output"</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"text-align: center;"</span><span class="hljs-tag">></span><span class="hljs-tag"><</span><span class="hljs-tag">/</span><span class="hljs-name">div</span><span class="hljs-tag">></span>
                      <span class="hljs-tag"><</span><span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"ads_output1"</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"text-align: center;"</span><span class="hljs-tag">></span><span class="hljs-tag"><</span><span class="hljs-tag">/</span><span class="hljs-name">div</span><span class="hljs-tag">></span>
                      <span class="hljs-tag"><</span><span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"ads_output2"</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"text-align: center;"</span><span class="hljs-tag">></span><span class="hljs-tag"><</span><span class="hljs-tag">/</span><span class="hljs-name">div</span><span class="hljs-tag">></span>
                      <span class="hljs-tag"><</span><span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"ads_output3"</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"text-align: center;"</span><span class="hljs-tag">></span><span class="hljs-tag"><</span><span class="hljs-tag">/</span><span class="hljs-name">div</span><span class="hljs-tag">></span>
                      <span class="hljs-tag"><</span><span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"ads_output4"</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"text-align: center;"</span><span class="hljs-tag">></span><span class="hljs-tag"><</span><span class="hljs-tag">/</span><span class="hljs-name">div</span><span class="hljs-tag">></span>
                      <span class="hljs-tag"><</span><span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"ads_output5"</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"text-align: center;"</span><span class="hljs-tag">></span><span class="hljs-tag"><</span><span class="hljs-tag">/</span><span class="hljs-name">div</span><span class="hljs-tag">></span>
                      <span class="hljs-tag"><</span><span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"ads_output7"</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"text-align: center;"</span><span class="hljs-tag">></span><span class="hljs-tag"><</span><span class="hljs-tag">/</span><span class="hljs-name">div</span><span class="hljs-tag">></span>
                      <span class="hljs-tag"><</span><span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"ads_output8"</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"text-align: center;"</span><span class="hljs-tag">></span><span class="hljs-tag"><</span><span class="hljs-tag">/</span><span class="hljs-name">div</span><span class="hljs-tag">></span>
                      <span class="hljs-tag"><</span><span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"ads_output9"</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"text-align: center;"</span><span class="hljs-tag">></span><span class="hljs-tag"><</span><span class="hljs-tag">/</span><span class="hljs-name">div</span><span class="hljs-tag">></span>
                      <span class="hljs-tag"><</span><span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"ads_output10"</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"text-align: center;"</span><span class="hljs-tag">></span><span class="hljs-tag"><</span><span class="hljs-tag">/</span><span class="hljs-name">div</span><span class="hljs-tag">></span>
                      <span class="hljs-tag"><</span><span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"ads_output11"</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"text-align: center;"</span><span class="hljs-tag">></span><span class="hljs-tag"><</span><span class="hljs-tag">/</span><span class="hljs-name">div</span><span class="hljs-tag">></span>
                      <span class="hljs-tag"><</span><span class="hljs-name">div</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"ads_output12"</span> <span class="hljs-attr">style</span>=<span class="hljs-string">"text-align: center;"</span><span class="hljs-tag">></span><span class="hljs-tag"><</span><span class="hljs-tag">/</span><span class="hljs-name">div</span><span class="hljs-tag">></span>
                    </pre>
                  <strong>Put this end of the body : </strong>
                  <br>
                    <pre class="hljs xml" style="border-radius: 15px">

                      <span class="hljs-tag"><</span><span class="hljs-name">script</span> <span class="hljs-attr">async</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"http://127.0.0.1:8000/assets/js/api/ads.js"</span> <span class="hljs-attr">crossorigin</span>=<span class="hljs-string">"anonymous"</span><span class="hljs-tag">></span><span class="hljs-tag"><</span><span class="hljs-tag">/</span><span class="hljs-name">script</span><span class="hljs-tag">></span>
                    </pre>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
