@extends('layouts.app', ['activePage' => 'donation-management', 'titlePage' => __('Donation listing')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Donation</h4>
                            <p class="card-category"> Here you can manage Donation</p>
                        </div>
                        <div class="card-body">
                            @if (session('status_success'))
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
                                                <i class="material-icons">close</i>
                                            </button>
                                            <span>{{ session('status_success') }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endif
         
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <tr>
                                            <th>
                                                Hospitals
                                            </th>
                                            <th>
                                                Donor
                                            </th>
                                            <th>
                                                Receptor
                                            </th>
                                            <th>
                                                Blood Group
                                            </th>
                                            <th>
                                                Request Date
                                            </th>

                                            {{-- <th>
                                                Blood Extraction Date
                                            </th>

                                            <th>
                                                Blood Transformation Date

                                            </th>
                                            <th>
                                                Status
                                            </th> --}}

                                           
                                            {{-- <th class="text-right">
                                                Actions
                                            </th> --}}
                                        </tr>
                                    
                                    <tbody>

                                        @foreach ($donation as $single)
                                            <tr>
                                                <td>
                                                    {{ ucfirst($single->hospital->name) }}
                                                </td>
                                                <td>
                                                    {{ ucfirst($single->donor ? $single->donor->name : '') }}
                                                </td>
                                                <td>
                                                    {{ ucfirst($single->receptor ? $single->receptor->name : '') }}
                                                </td>
                                                <td>
                                                    {{ ucfirst($single->donor ? $single->donor->blood ? $single->donor->blood->group:'' : '') }}
                                                </td>
                                                <td>
                                                    {{ ucfirst($single->created_at) }}
                                                </td>
                                                {{-- <td>
                                                    {{ ucfirst($single->email) }}
                                                </td>
                                                <td>
                                                    {{ ucfirst($single->address) }}
                                                </td>
                                                <td>
                                                    {{ ucfirst($single->username) }}
                                                </td> --}}


                                                {{-- <td class="td-actions text-right">

                                                    <a rel="tooltip" class="btn btn-success btn-link"
                                                        href="{{ route('donation.edit', ['donation' => $single->id]) }}"
                                                        data-original-title="" title="">
                                                        <i class="material-icons">edit</i>
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                    <a rel="tooltip" class="btn btn-success btn-link"
                                                        href="{{ route('donation.show', ['donation' => $single->id]) }}"
                                                        data-original-title="" title="">
                                                        <i class="material-icons">visibility</i>
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                    <form action="{{ route('donation.destroy', ['donation' => $single->id]) }}"
                                                        method="post" class="d-inline-block">
                                                        <button type="submit" rel="tooltip" class="btn btn-success btn-link"
                                                            data-original-title="" title="">
                                                            <i class="material-icons">delete</i>
                                                            <div class="ripple-container"></div>
                                                        </button>
                                                        @method('delete')
                                                        @csrf
                                                    </form>
                                                </td> --}}
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <div class="la-pagination">
                                    {{ $donation->links() }}


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
