@extends('layout')

@section('title', 'บทความ')

@section('content')
    <h2 class="text-center py-4">บทความทั้งหมด</h2>

    <table class="table align-middle">
        <thead>
            <tr>
                <th scope="col">ลำดับ</th>
                <th scope="col">ชื่อบทความ (Title)</th>
                <th scope="col">เนื้อหา (Content)</th>
                <th scope="col">สถานะ (Status)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $index => $item)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $item['title'] }}</td>
                    <td>{{ $item['content'] }}</td>
                    <td>
                        @if ($item['status'] == true)
                            <span class="badge bg-success-subtle text-success border border-success px-3 py-2 rounded-pill">
                                เผยแพร่
                            </span>
                        @else
                            <span class="badge bg-danger-subtle text-danger border border-danger px-3 py-2 rounded-pill">
                                ไม่เผยแพร่
                            </span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
