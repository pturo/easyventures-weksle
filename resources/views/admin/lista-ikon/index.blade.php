@extends('admin.layout.admin-layout')

@section('content')
    <div class="general-title">
        <h2>Lista ikon Font Awesome</h2>
    </div>
    <div class="general-subtitle">
        <h4>
            Ta strona zawiera podstawową listę ikon Font Awesome, które można wykorzystać
            na stronie.
        </h4>
    </div>
    <div class="general-wrapper">
        <div class="add-section">
            <h4>Lista ikon Font Awesome, które można użyć w niektórych sekcjach</h4>
        </div>
        <div class="list-of-sections">
            <table class="list-of-icons">
                <thead>
                    <tr>
                        <th>L.p.</th>
                        <th>Ikona</th>
                        <th>Nazwa ikony</th>
                        <th>Pełna nazwa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><i class="fa fa-book"></i></td>
                        <td>fa fa-book</td>
                        <td>Book</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><i class="fa fa-star"></i></td>
                        <td>fa fa-star</td>
                        <td>Star</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><i class="fa fa-envelope"></i></td>
                        <td>fa fa-envelope</td>
                        <td>Envelope</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><i class="fa fa-phone"></i></td>
                        <td>fa fa-phone</td>
                        <td>Phone</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><i class="fa fa-map"></i></td>
                        <td>fa fa-map</td>
                        <td>Map</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><i class="fa fa-info-circle"></i></td>
                        <td>fa fa-info-circle</td>
                        <td>Info circle</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td><i class="fa fa-user-circle"></i></td>
                        <td>fa fa-user-circle</td>
                        <td>User circle</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td><i class="fa fa-thumbs-up"></i></td>
                        <td>fa fa-thumbs-up</td>
                        <td>Thumbs up</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
