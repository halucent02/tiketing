<div class="footser">
    <div class="esg_name">Developed by: Enterprise Solutions Group</div>
</div>
<script src="<?= base_url('javascript_plugins/chosen_v1.4.2/chosen.jquery.js') ;?>" type="text/javascript"></script>
<script src="<?= base_url('javascript_plugins/chosen_v1.4.2/docsupport/prism.js') ;?>" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    var config = {
        '.chosen-select'           : {},
        '.chosen-select-deselect'  : {allow_single_deselect:true},
        '.chosen-select-no-single' : {disable_search_threshold:10},
        '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
        '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
        $(selector).chosen(config[selector]);
    }
</script>
</body>
</html>
