{extends file='page.tpl'} {* Hereda header/footer *}

{block name='page_content'}
    <h1>{$titulo}</h1>
    <div class="imagenes-container">
        {foreach from=$imagenes item=img}
            <a href="{$ruta_publica}{$img}" class="fancybox" data-fancybox="galeria" title="{$img}">
                <img src="{$ruta_publica}{$img}" alt="{$img}" class="img-responsive" />
            </a>
        {/foreach}
    </div>
{/block}

{block name='page_footer'}
    <script>
        $(document).ready(function() {
            if (typeof $.fancybox !== 'undefined') {
                $(".fancybox").fancybox({
                    openEffect: 'fade',
                    closeEffect: 'fade',
                    helpers: {
                        title: {
                            type: 'inside'
                        }
                    }
                });
            }
        });
    </script>
{/block}