<div class="modal fade" id="agentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notice">
        <div class="modal-content">
            <div class="modal-header no-border-header">
                <h5 class="modal-title" id="myModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="instruction">
                    <div class="row">
                        <div class="col-md-8">
                            <p> <strong>1. Register</strong> - the first step is to create an account at <a href="http://www.creative-tim.com/">Creative Tim</a>. You can choose a social network or go for the classic version, whatever works best for you.</p>
                        </div>
                        <div class="col-md-4">
                            <div class="picture">
                                <img src="assets/img/sections/angelo-pantazis.jpg" alt="Thumbnail Image"  class="img-rounded img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="instruction">
                    <div class="row">
                        <div class="col-md-8">
                            <p> <strong>2. Apply</strong> - the first step is to create an account at <a href="http://www.creative-tim.com/">Creative Tim</a>. You can choose a social network or go for the classic version, whatever works best for you.</p>
                        </div>
                        <div class="col-md-4">
                            <div class="picture">
                                <img src="assets/img/sections/rawpixel-coms.jpg" alt="Thumbnail Image"  class="img-rounded img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
                <p>If you have more questions, don't hesitate to contact us or send us a tweet @creativetim. We're here to help!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-link" data-dismiss="modal">Okay</button>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
    $(document).on("click", ".open-agentModal", function () {
        var agentName = $(this).data('agent-name');
        $(".modal-content .modal-title").val( agentName );
        // As pointed out in comments,
        // it is superfluous to have to manually call the modal.
        // $('#addBookDialog').modal('show');
    });
</script>
@endpush