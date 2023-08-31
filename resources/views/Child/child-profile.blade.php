@extends('layouts.master')
@section('css')
    <!--- Internal Select2 css-->
    <link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('title')
    Child Profile
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Profiles</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Child Profile</span>
            </div>
        </div>

        <div class="d-flex my-xl-auto right-content">

            <div class="mb-3 mb-xl-0">
                <div class="btn-group dropdown">
                    <button type="button" class="btn btn-primary">Select Report Type</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                            id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-left"
                         data-x-placement="bottom-end">
                        <a class="dropdown-item" href="{{route('reports.create-child',$child->id)}}">Social Research Form - Child</a>
                        <a class="dropdown-item" href="{{route('reports.child-summary',$child->id)}}">Summary Details - Child</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <nav class="nav main-nav flex-column flex-md-row justify-content-center">
                            <a class="nav-link active" href="#child_info">Child Info</a>
                            <a class="nav-link" href="#mother_info">Mother Info</a>
                            <a class="nav-link" href="#father_info">Father Info</a>
                            <a class="nav-link" href="#guardian_info">Guardian Info</a>
                            <a class="nav-link" href="#edu_info">Education Info</a>
                            <a class="nav-link" href="#health_info">Health Info</a>
                            <a class="nav-link" href="#econimc_info">Economic Info</a>
                            <a class="nav-link" href="#resident_info">Resident  Info</a>
                            <a class="nav-link" href="#family_info">Family Info</a>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="{{asset('storage/uploads/children/'.$photo->file_name.'/'.$photo->path)}}"
                             alt="avatar"
                             class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3">{{$child->child_fullName_en}}</h5>
                        <div class="d-flex justify-content-center mb-2">
                            <button type="button" class="btn btn-primary">Edit Profile</button>
                        </div>
                    </div>
                </div>
                @foreach($attachs as $attach)
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body text-center">
                            <img src="{{asset('storage/uploads/children/'.$attach['file_name'].'/'.$attach['path'])}}" alt="avatar"
                                 class="img-fluid" style="width: 150px;">
                            <h5 class="my-3" style="font-weight: 800;text-transform: uppercase;color: #0162e8">{{$attach['file_name']}}</h5>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="{{ route('download', ['filename' => $attach['file_name'] , 'path' => $attach['path'] ]) }}" class="btn btn-warning">Download</a>
                            </div>
                        </div>
                    </div>
                    <br>
                @endforeach
            </div>

            <div class="col-lg-8"id="child_info">
                <div class="card mb-4">
                    <div class="card-body">
                        <p class="mb-4"><span class="text-primary font-italic me-1" style="font-weight: 800;text-transform: uppercase;">Child Information</span>
                        </p>
                        <div class="row" >
                            <div class="col-sm-3">
                                <p class="mb-0">Engilsh Name</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$child->child_fullName_en}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Arabic Name</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$child->child_fullName_ar}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Child Code</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$child->child_code}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Child Id Number</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$child->child_id_no}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Category</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$child->category}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Has Disability</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">@if($child->has_disability == 0) No @else Yes @endif</p>
                            </div>
                        </div>
                        <hr>
                        @if($child->has_disability == 1)
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Disability Type</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{$child->disability_type}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Sponsorship Category</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{$child->sponsorship_category}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Scale Of Poverty</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{$child->scale_of_poverty}}</p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row" id="mother_info">
                    <div class="col-md-12" style="margin-bottom: 1.5rem">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                <p class="mb-4"><span class="text-primary font-italic me-1" style="font-weight: 800;text-transform: uppercase;">Mother Information</span>
                                </p>
                                <div class="row" >
                                    <div class="col-sm-3">
                                        <p class="mb-0">Mother Full Name En</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->mother_fullName_en}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Mother Full Name Ar</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->mother_fullName_ar}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Mother Id Number</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->mother_id_no}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Mother Martial Status</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->mother_martial_status}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-bottom: 1.5rem" id="father_info">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                <p class="mb-4"><span class="text-primary font-italic me-1" style="font-weight: 800;text-transform: uppercase;">Father Information</span>
                                </p>
                                <div class="row" >
                                    <div class="col-sm-3">
                                        <p class="mb-0">Father Full Name En</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->father_fullName_en}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Father Full Name Ar</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->father_fullName_ar}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Father Id Number</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->father_id_no}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Death Date</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->death_date}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-bottom: 1.5rem" id="guardian_info">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                <p class="mb-4"><span class="text-primary font-italic me-1" style="font-weight: 800;text-transform: uppercase;">Guardian Information</span>
                                </p>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Guardian Name EN</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->guardian->guardian_fullName_en}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Guardian Name Ar</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->guardian->guardian_fullName_ar}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">English Realtion</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->guardian->rel_to_en}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Arabic Realtion</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->guardian->rel_to_ar}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">English Realtion</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->guardian->rel_to_en}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">English Realtion</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->guardian->rel_to_en}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Guardian Id Number</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->guardian->guardian_id_no}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Guardian Martial Status</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->guardian->guardian_martial_status}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Work</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->guardian->work}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Education Level</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->guardian->edu_level}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Monthly Salary</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->guardian->monthly_salary}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Address Details</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->guardian->address_details}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Governorate</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->guardian->governorate->gov_name_en}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Area</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->guardian->area->area_name_en}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->guardian->email}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Phone No.</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->guardian->phone_no}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Mobile No. 1</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->guardian->mobile_1}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Mobile No. 2</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->guardian->mobile_2}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--child Eduction Informations--}}
                    <div class="col-md-12" style="margin-bottom: 1.5rem" id="edu_info">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                <p class="mb-4"><span class="text-primary font-italic me-1" style="font-weight: 800;text-transform: uppercase;">Child Education Information</span>
                                </p>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Child Education Level</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->education->child_edu_level}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">School Name</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->education->school_name}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Need Lessons</p>
                                    </div>
                                    <div class="col-sm-9">
                                        @if($child->education->need_lessons == 1)
                                            <p class="text-muted mb-0">Yes</p>
                                        @else
                                            <p class="text-muted mb-0">No</p>
                                        @endif
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Intensive Lessons</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->education->intensive_lessons}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Cost Lesson</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->education->cost_lesson}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">hobbies</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->education->hobbies}}</p>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                    {{--child Health Informations--}}
                    <div class="col-md-12" style="margin-bottom: 1.5rem" id="health_info">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                <p class="mb-4"><span class="text-primary font-italic me-1" style="font-weight: 800;text-transform: uppercase;">Child Health Information</span>
                                </p>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">good health</p>
                                    </div>
                                    <div class="col-sm-9">
                                        @if($child->health->good_health == 1)
                                            <p class="text-muted mb-0">Yes</p>
                                        @else
                                            <p class="text-muted mb-0">No</p>
                                        @endif
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Has Disease</p>
                                    </div>
                                    <div class="col-sm-9">
                                        @if($child->health->has_disease == 1)
                                            <p class="text-muted mb-0">Yes</p>
                                        @else
                                            <p class="text-muted mb-0">No</p>
                                        @endif
                                    </div>
                                </div>
                                <hr>
                                @php $i = 1; @endphp
                                @foreach($child->health->patients as $p)
                                    @if($p['patient_name'] !== null)
                                        <br>
                                        <p class="mb-4"><span class="text-primary font-italic me-1" style="font-weight: 800;text-transform: uppercase;">Patients {{$i++}}</span>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Patients Name</p>
                                            </div>

                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0"> {{$p['patient_name']}} </p>
                                            </div>

                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Disease</p>
                                            </div>

                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0"> {{$p['disease']}} </p>
                                            </div>

                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Treatment Cost</p>
                                            </div>

                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0"> {{$p['treatment_cost']}} </p>
                                            </div>

                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Special Needs</p>
                                            </div>

                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0"> {{$p['special_needs']}} </p>
                                            </div>

                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Notes</p>
                                            </div>

                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0"> {{$p['notes']}} </p>
                                            </div>

                                        </div>
                                        <hr>
                                    @endif
                                @endforeach
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">medications</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->health->medications}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--child Econoimc Informations--}}
                    <div class="col-md-12" style="margin-bottom: 1.5rem" id="econimc_info">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                <p class="mb-4"><span class="text-primary font-italic me-1" style="font-weight: 800;text-transform: uppercase;">Child Economic Information</span>
                                </p>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Jobs Members</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->economic->jobs_members}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Periodic Sponsorships</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->economic->periodic_sponsorships}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Irregular Aids</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->economic->irregular_aids}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">House Fees</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->economic->house_fees}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Education Fees</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->economic->edu_fees}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Rents</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->economic->rents}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Medical Fees</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->economic->medical_fees}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Family Needs</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->economic->family_needs}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Rents</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->economic->rents}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Project Type</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->economic->project_type}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Project Cost</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->economic->project_cost}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Notes</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->economic->notes}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--child Resident Informations--}}
                    <div class="col-md-12" style="margin-bottom: 1.5rem" id="resident_info">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                <p class="mb-4"><span class="text-primary font-italic me-1" style="font-weight: 800;text-transform: uppercase;">Child Resident Information</span>
                                </p>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Resident Status</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->resident->resident_status}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Resident Type</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->resident->resident_type}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Residen Description</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->resident->resident_description}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Resident Needs</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->resident->resident_needs}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Rent Cost</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->resident->rent_cost}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Rents</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->resident->resident_status}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Number Of Rooms</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->resident->no_rooms}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">House Area</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->resident->house_area}}</p>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                    {{--child Family Informations--}}
                    <div class="col-md-12" style="margin-bottom: 1.5rem" id="family_info">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                <p class="mb-4"><span class="text-primary font-italic me-1" style="font-weight: 800;text-transform: uppercase;">Child's Family Information</span>
                                </p>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Members Count</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->family->members_count}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Members University</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->family->members_university}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Members School</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->family->members_school}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Members Worker</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$child->family->members_worker}}</p>
                                    </div>
                                </div>
                                <hr>
                                @php $i = 1; @endphp
                                @foreach($child->family->relatives as $family)
                                    @if($family['name'] !== null)
                                        <br>
                                        <p class="mb-4"><span class="text-primary font-italic me-1" style="font-weight: 800;text-transform: uppercase;">Member {{$i++}}</span>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Name</p>
                                            </div>

                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0"> {{$family['name']}} </p>
                                            </div>

                                        </div>
                                        @if($family['dob'] !== null)
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mb-0">Date Of Birth</p>
                                                </div>

                                                <div class="col-sm-9">
                                                    <p class="text-muted mb-0"> {{$family['dob']}} </p>
                                                </div>

                                            </div>
                                        @endif
                                        @if($family['fees'] !== null)
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mb-0">Fees</p>
                                                </div>

                                                <div class="col-sm-9">
                                                    <p class="text-muted mb-0"> {{$family['fees']}} </p>
                                                </div>

                                            </div>
                                        @endif
                                        @if($family['work_type'] !== null)
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mb-0">Work Type</p>
                                                </div>

                                                <div class="col-sm-9">
                                                    <p class="text-muted mb-0"> {{$family['work_type']}} </p>
                                                </div>

                                            </div>
                                        @endif
                                        @if($family['income'] !== null)
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mb-0">income</p>
                                                </div>

                                                <div class="col-sm-9">
                                                    <p class="text-muted mb-0"> {{$family['income']}} </p>
                                                </div>

                                            </div>
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <!--Internal  Select2 js -->
    <script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <!-- Internal Jquery.steps js -->
    <script src="{{URL::asset('assets/plugins/jquery-steps/jquery.steps.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>
    <!--Internal  Form-wizard js -->
    <script src="{{URL::asset('assets/js/form-wizard.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <!--Internal  jquery.maskedinput js -->
    <script src="{{URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>
    <!--Internal  spectrum-colorpicker js -->
    <script src="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js')}}"></script>
    <!-- Internal Select2.min js -->
    <script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <!--Internal Ion.rangeSlider.min js -->
    <script src="{{URL::asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
    <!--Internal  jquery-simple-datetimepicker js -->
    <script src="{{URL::asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>
    <!-- Ionicons js -->
    <script src="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>
    <!--Internal  pickerjs js -->
    <script src="{{URL::asset('assets/plugins/pickerjs/picker.min.js')}}"></script>
    <!-- Internal form-elements js -->
    <script src="{{URL::asset('assets/js/form-elements.js')}}"></script>
@endsection
