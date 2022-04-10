@extends('layouts.app', ['activePage' => 'hospital-management', 'titlePage' => __('Hospitals listing')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Hospitals</h4>
                            <p class="card-category"> Here you can manage Hospitals</p>
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
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{ route('hospital.create') }}" class="btn btn-sm btn-primary">Add Hospital</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <tr>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Address
                                            </th>

                                            <th>
                                                Email
                                            </th>
                                            <th>
                                                Latitude
                                            </th>
                                            <th>
                                                Longititude
                                            </th>

                                            <th class="text-right">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($hospitals as $single)
                                            <tr>
                                                
                                                <td>
                                                    {{ $single->name }}
                                                </td>
                                                <td>
                                                    {{ ($single->address) }}
                                                </td>
                                                <td>
                                                    {{ ($single->email) }}
                                                </td>
                                                <td>
                                                    {{ ($single->latitude) }}
                                                </td>
                                                <td>
                                                    {{ ($single->longitude) }}
                                                </td>



                                                <td class="td-actions text-right">

                                                    <a rel="tooltip" class="btn btn-success btn-link"
                                                        href="{{ route('hospital.edit', ['hospital' => $single->id]) }}"
                                                        data-original-title="" title="">
                                                        <i class="material-icons">edit</i>
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                    <a rel="tooltip" class="btn btn-success btn-link"
                                                        href="{{ route('hospital.show', ['hospital' => $single->id]) }}"
                                                        data-original-title="" title="">
                                                        <i class="material-icons">visibility</i>
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                    <form
                                                        action="{{ route('hospital.destroy', ['hospital' => $single->id]) }}"
                                                        method="post" class="d-inline-block">
                                                        <button type="submit" rel="tooltip" class="btn btn-success btn-link"
                                                            data-original-title="" title="">
                                                            <i class="material-icons">delete</i>
                                                            <div class="ripple-container"></div>
                                                        </button>
                                                        @method('delete')
                                                        @csrf
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <div class="la-pagination">
                                    {{ $hospitals->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
