<div data-ng-controller="SingleCoche">
	<h2 data-ng-bind-html="coche.title"></h2>
	<hr />
	<p data-ng-if="coche.field_propietario">Propietario: {{ coche.field_propietario }}</p>
	<p data-ng-if="coche.field_color">Color: {{ coche.field_color }}</p>
	<p data-ng-if="coche.field_matricula">Matr&iacute;cula: {{ coche.field_matricula }}</p>
	<img data-ng-src="{{coche.field_foto}}" alt="Description" />
</div>