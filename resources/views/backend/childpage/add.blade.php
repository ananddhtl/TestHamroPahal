@include('backend.include.header')


<!-- Header End-->
@include('backend.include.sidebar')
<!-- Body Start-->
<div class="wrapper">

    <div class="event-dt-block p-80">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-xl-8 col-lg-9 col-md-12">
                    <div class="wizard-steps-block">
                        <div id="add-event-tab" class="step-app">
                            <ul class="step-steps">
                                <li class="active">
                                    <a href="#tab_step1">
                                    </a>
                                </li>

                            </ul>
                            <div style="margin-top:-100px;" class="step-content">
                                <div class="step-tab-panel step-tab-info active" id="tab_step1">
                                    <div class="tab-from-content">
                                        <div class="main-card">
                                            <div class="bp-title">
                                                <h4><i class="fa-solid fa-circle-info step_icon me-3"></i>Add Child Page

                                                </h4>
                                            </div>
                                            <div class="p-4 bp-form main-form">
                                                <div class="row">
                                                    <form id="eventForm" action="{{ url('/admin-childpagedata ') }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="form-group border_bottom pb_30">
                                                                <label class="form-label fs-16">Select parent page
                                                                </label>

                                                                <select name="parentpage_id" class="selectpicker" data-size="5"
                                                                    title="Select the parent page"
                                                                    data-live-search="false">
                                                                    @foreach($parentpage as $item)
                                                                    <option value="{{$item->id}}">{{$item->title}}
                                                                    </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group border_bottom pb_30">
                                                                <label class="form-label fs-16">Child Title</label>
                                                                <input class="form-control h_40" type="text" name="child_title" value="{{old('title')}}"
                                                                     placeholder="Enter child title" value="">
                                                            </div>
                                                            <div class="form-group border_bottom pb_30">
                                                                <button type="submit"
                                                                    class="btn btn-default btn-hover steps_btn">Save</button>
                                                            </div>

                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Body End-->
<!-- Footer Start-->

<!-- Footer End-->

@include('backend.include.footer')

<script>
$('#add-event-tab').steps({
    onFinish: function() {
        alert('Wizard Completed');
    }
});
</script>
<script>
ClassicEditor
    .create(document.querySelector('#pd_editor'), {
        // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
    })
    .then(editor => {
        window.editor = editor;
    })
    .catch(err => {
        console.error(err.stack);
    });
</script>





</body>

</html>
