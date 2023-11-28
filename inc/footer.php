<section data-bs-version="5.1" class="footer7 cid-tlpqF0pP6V" once="footers" id="footer7-8">
    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © Copyright <?= date("Y")." ".$name; ?> - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>

<?php if ($livechat) { ?>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/<?= $livechat_property_id ?>/<?= $livechat_widget_id ?>';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<?php } ?>