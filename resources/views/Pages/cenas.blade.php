@extends('pages')
@section('content')

<main role="main">
    <div class="content">
	<div class="center">
            <div class="background">
		<div class="block">
                    <div class="paragraph">
			<section>
                            <a id="cenas"></a>
				<img src="images/cenas.png" alt="Cenas">
				<h2>Cenas</h2>
				<h3>Frizieru pakalpojumi</h3>
                                    <table>
                                        <tr>
                                            <th></th>
                                            <th>Meistars frizieris</th>
                                            <th>Top meistars</th>
					</tr>
					<tr>
                                            <td class="name">īsi mati</td>
                                            <td>14.00</td>
                                            <td>16.00</td>
					</tr>
					<tr>
                                            <td class="name">vidēji mati</td>
                                            <td>16.00</td>
                                            <td>18.00</td>
					</tr>
					<tr>
                                            <td class="name">gari mati</td>
                                            <td>18.00</td>
                                            <td>22.00</td>
					</tr>
				</table>
                                <h3>Manikīra pakalpojumi</h3>
                                <table>
                                    <tr>
					<td class="name2">Klasiskais manikīrs</td>
					<td>8.00</td>
                                    </tr>
                                    <tr>
                                        <td class="name2">Franču manikīrs</td>
					<td>9.00</td>
                                    </tr>
                                    <tr>
					<td class="name2">Nagu lakošana</td>
					<td>2.00</td>
                                    </tr>
                                </table>
				<h3>Pedikīrs</h3>
				<table>
                                    <tr>
					<td class="name2">Klasiskais pedikīrs</td>
					<td>20.00</td>
                                    </tr>
                                    <tr>
					<td class="name2">Franču pedikīrs</td>
					<td>22.00</td>
                                    </tr>
                                    <tr>
					<td class="name2">Nagu lakošana</td>
					<td>4.00</td>
                                    </tr>
                                </table>
			</section>
                    </div>
		</div>
            </div>
	</div>
    </div>
</main>

@endsection