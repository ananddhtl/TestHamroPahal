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
                                                    <h4><i class="fa-solid fa-circle-info step_icon me-3"></i>Add Event
                                                        Description
                                                    </h4>
                                                </div>
                                                <div class="p-4 bp-form main-form">
                                                    <div class="row">
                                                        <form id="eventForm" action="{{url('/store-eventsdata')}}"
                                                            method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group border_bottom pb_30">
                                                                    <label class="form-label fs-16">Event Name.*
                                                                    </label>

                                                                    <input class="form-control h_50" type="text"
                                                                        name="title" placeholder="Enter event name here"
                                                                        value="">
                                                                </div>
                                                                <div class="form-group border_bottom pb_30">
                                                                    <label class="form-label fs-16">Location.*
                                                                    </label>

                                                                    <input class="form-control h_50" name="location"
                                                                        type="text" placeholder="Enter location"
                                                                        value="">
                                                                </div>
                                                                <div class="form-group border_bottom pb_30">
                                                                    <label class="form-label fs-16">Organized By.*
                                                                    </label>

                                                                    <input class="form-control h_50" type="text"
                                                                        placeholder="Enter organizer"
                                                                        name="organized_by" value="">
                                                                </div>
                                                                <div class="form-group border_bottom pb_30">
                                                                    <label class="form-label fs-16">Ticket Fee.*
                                                                    </label>

                                                                    <input class="form-control h_50" type="text"
                                                                        placeholder="Enter ticket fee" name="ticketfee"
                                                                        value="">
                                                                </div>
                                                                <div class="form-group border_bottom pb_30">
                                                                    <label class="form-label fs-16">Total Target Fund.*
                                                                    </label>

                                                                    <input class="form-control h_50" type="text"
                                                                        placeholder="Enter Target Fund"
                                                                        name="totaltargetfund" value="">
                                                                </div>
                                                                <div class="form-group border_bottom pb_30">
                                                                    <label class="form-label fs-16">Thumbnail.*
                                                                    </label>

                                                                    <input class="form-control h_50" type="file"
                                                                        placeholder="Enter organizer" name="thumbnail"
                                                                        value="">
                                                                </div>



                                                                <div class="form-group border_bottom  pb_30">

                                                                    <div class="row g-2">
                                                                        <div class="col-md-6">
                                                                            <label class="form-label mt-3 fs-6">Event
                                                                                Date.*</label>
                                                                            <div class="loc-group position-relative">
                                                                                <input
                                                                                    class="form-control h_50 datepicker-here"
                                                                                    data-language="en" type="text"
                                                                                    placeholder="MM/DD/YYYY" value=""
                                                                                    name="date">
                                                                                <span class="absolute-icon"><i
                                                                                        class="fa-solid fa-calendar-days"></i></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="row g-2">
                                                                                <div class="col-md-6">
                                                                                    <div class="clock-icon">
                                                                                        <label
                                                                                            class="form-label mt-3 fs-6">Time</label>
                                                                                        <select name="time"
                                                                                            class="selectpicker"
                                                                                            data-size="5"
                                                                                            data-live-search="true">
                                                                                            <option value="00:00">12:00
                                                                                                AM</option>
                                                                                            <option value="00:15">12:15
                                                                                                AM</option>
                                                                                            <option value="00:30">12:30
                                                                                                AM</option>
                                                                                            <option value="00:45">12:45
                                                                                                AM</option>
                                                                                            <option value="01:00">01:00
                                                                                                AM</option>
                                                                                            <option value="01:15">01:15
                                                                                                AM</option>
                                                                                            <option value="01:30">01:30
                                                                                                AM</option>
                                                                                            <option value="01:45">01:45
                                                                                                AM</option>
                                                                                            <option value="02:00">02:00
                                                                                                AM</option>
                                                                                            <option value="02:15">02:15
                                                                                                AM</option>
                                                                                            <option value="02:30">02:30
                                                                                                AM</option>
                                                                                            <option value="02:45">02:45
                                                                                                AM</option>
                                                                                            <option value="03:00">03:00
                                                                                                AM</option>
                                                                                            <option value="03:15">03:15
                                                                                                AM</option>
                                                                                            <option value="03:30">03:30
                                                                                                AM</option>
                                                                                            <option value="03:45">03:45
                                                                                                AM</option>
                                                                                            <option value="04:00">04:00
                                                                                                AM</option>
                                                                                            <option value="04:15">04:15
                                                                                                AM</option>
                                                                                            <option value="04:30">04:30
                                                                                                AM</option>
                                                                                            <option value="04:45">04:45
                                                                                                AM</option>
                                                                                            <option value="05:00">05:00
                                                                                                AM</option>
                                                                                            <option value="05:15">05:15
                                                                                                AM</option>
                                                                                            <option value="05:30">05:30
                                                                                                AM</option>
                                                                                            <option value="05:45">05:45
                                                                                                AM</option>
                                                                                            <option value="06:00">06:00
                                                                                                AM</option>
                                                                                            <option value="06:15">06:15
                                                                                                AM</option>
                                                                                            <option value="06:30">06:30
                                                                                                AM</option>
                                                                                            <option value="06:45">06:45
                                                                                                AM</option>
                                                                                            <option value="07:00">07:00
                                                                                                AM</option>
                                                                                            <option value="07:15">07:15
                                                                                                AM</option>
                                                                                            <option value="07:30">07:30
                                                                                                AM</option>
                                                                                            <option value="07:45">07:45
                                                                                                AM</option>
                                                                                            <option value="08:00">08:00
                                                                                                AM</option>
                                                                                            <option value="08:15">08:15
                                                                                                AM</option>
                                                                                            <option value="08:30">08:30
                                                                                                AM</option>
                                                                                            <option value="08:45">08:45
                                                                                                AM</option>
                                                                                            <option value="09:00">09:00
                                                                                                AM</option>
                                                                                            <option value="09:15">09:15
                                                                                                AM</option>
                                                                                            <option value="09:30">09:30
                                                                                                AM</option>
                                                                                            <option value="09:45">09:45
                                                                                                AM</option>
                                                                                            <option value="10:00"
                                                                                                selected="selected">
                                                                                                10:00 AM</option>
                                                                                            <option value="10:15">10:15
                                                                                                AM</option>
                                                                                            <option value="10:30">10:30
                                                                                                AM</option>
                                                                                            <option value="10:45">10:45
                                                                                                AM</option>
                                                                                            <option value="11:00">11:00
                                                                                                AM</option>
                                                                                            <option value="11:15">11:15
                                                                                                AM</option>
                                                                                            <option value="11:30">11:30
                                                                                                AM</option>
                                                                                            <option value="11:45">11:45
                                                                                                AM</option>
                                                                                            <option value="12:00">12:00
                                                                                                PM</option>
                                                                                            <option value="12:15">12:15
                                                                                                PM</option>
                                                                                            <option value="12:30">12:30
                                                                                                PM</option>
                                                                                            <option value="12:45">12:45
                                                                                                PM</option>
                                                                                            <option value="13:00">01:00
                                                                                                PM</option>
                                                                                            <option value="13:15">01:15
                                                                                                PM</option>
                                                                                            <option value="13:30">01:30
                                                                                                PM</option>
                                                                                            <option value="13:45">01:45
                                                                                                PM</option>
                                                                                            <option value="14:00">02:00
                                                                                                PM</option>
                                                                                            <option value="14:15">02:15
                                                                                                PM</option>
                                                                                            <option value="14:30">02:30
                                                                                                PM</option>
                                                                                            <option value="14:45">02:45
                                                                                                PM</option>
                                                                                            <option value="15:00">03:00
                                                                                                PM</option>
                                                                                            <option value="15:15">03:15
                                                                                                PM</option>
                                                                                            <option value="15:30">03:30
                                                                                                PM</option>
                                                                                            <option value="15:45">03:45
                                                                                                PM</option>
                                                                                            <option value="16:00">04:00
                                                                                                PM</option>
                                                                                            <option value="16:15">04:15
                                                                                                PM</option>
                                                                                            <option value="16:30">04:30
                                                                                                PM</option>
                                                                                            <option value="16:45">04:45
                                                                                                PM</option>
                                                                                            <option value="17:00">05:00
                                                                                                PM</option>
                                                                                            <option value="17:15">05:15
                                                                                                PM</option>
                                                                                            <option value="17:30">05:30
                                                                                                PM</option>
                                                                                            <option value="17:45">05:45
                                                                                                PM</option>
                                                                                            <option value="18:00">06:00
                                                                                                PM</option>
                                                                                            <option value="18:15">06:15
                                                                                                PM</option>
                                                                                            <option value="18:30">06:30
                                                                                                PM</option>
                                                                                            <option value="18:45">06:45
                                                                                                PM</option>
                                                                                            <option value="19:00">07:00
                                                                                                PM</option>
                                                                                            <option value="19:15">07:15
                                                                                                PM</option>
                                                                                            <option value="19:30">07:30
                                                                                                PM</option>
                                                                                            <option value="19:45">07:45
                                                                                                PM</option>
                                                                                            <option value="20:00">08:00
                                                                                                PM</option>
                                                                                            <option value="20:15">08:15
                                                                                                PM</option>
                                                                                            <option value="20:30">08:30
                                                                                                PM</option>
                                                                                            <option value="20:45">08:45
                                                                                                PM</option>
                                                                                            <option value="21:00">09:00
                                                                                                PM</option>
                                                                                            <option value="21:15">09:15
                                                                                                PM</option>
                                                                                            <option value="21:30">09:30
                                                                                                PM</option>
                                                                                            <option value="21:45">09:45
                                                                                                PM</option>
                                                                                            <option value="22:00">10:00
                                                                                                PM</option>
                                                                                            <option value="22:15">10:15
                                                                                                PM</option>
                                                                                            <option value="22:30">10:30
                                                                                                PM</option>
                                                                                            <option value="22:45">10:45
                                                                                                PM</option>
                                                                                            <option value="23:00">11:00
                                                                                                PM</option>
                                                                                            <option value="23:15">11:15
                                                                                                PM</option>
                                                                                            <option value="23:30">11:30
                                                                                                PM</option>
                                                                                            <option value="23:45">11:45
                                                                                                PM</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group border_bottom pb_30">
                                                                    <label class="form-label fs-16">Please describe your
                                                                        event.</label>
                                                                    <p class="mt-2 fs-14 d-block mb-3">Write a few words
                                                                        below to describe your event and provide any
                                                                        extra
                                                                        information such as schedules, itinerary or any
                                                                        special instructions required to attend your
                                                                        event.
                                                                    </p>
                                                                    <div class="text-editor mt-4">
                                                                        <textarea name="description"
                                                                            id="pd_editor"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group border_bottom pb_30">
                                                                    <button id="submitForm"
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



    <script>
    $(document).ready(function() {
        $("#submitForm").click(function() {

            var editor = CKEDITOR.instances
                .pd_editor;
            var editorContent = editor.getData();


            $("#eventDescription").val(editorContent);


            $.ajax({
                type: "POST",
                url: "{{ url('/store-eventsdata') }}",
                data: $("#eventForm")
                    .serialize(),
                success: function(response) {

                }
            });
        });
    });
    </script>


</body>

</html>