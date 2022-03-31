@extends('home.index')

@section('content')
    <div class="row" style="margin: 30px 0;">
        <div class="col-md-12 ">
            <table id="" class="table table-striped table-bordered">
                <thead style="background-color: #ef3d32;color: white;">
                    <tr>
                        <th>
                            Name
                        </th>
                        <th>
                            Blood Request
                        </th>
                    </tr>
                </thead>
                <tbody style="color: black">
                    @foreach ($hospital as $single)
                        <tr>
                            <td>
                                {{ ucfirst($single->name) }}
                            </td>
                            <td>

                                <a rel="tooltip" class="btn btn-success btn-link"
                                    href="{{ route('bloodrequest', ['donor' => $single->id]) }}" data-original-title=""
                                    title="">
                                    <button class="btn btn-danger">Request</button>
                                    <div class="ripple-container"></div>
                                </a>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>

    </div>
@endsection
