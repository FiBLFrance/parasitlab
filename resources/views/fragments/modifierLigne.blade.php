{{-- FRAGMENT DESTINE A FAIRE UN BOUTON modifier
ET UN ROUTAGE VERS LA METHODE edit
VARIABLES: id ET route
--}}
<a href="{{ route($route, $id) }}" class="btn" type="submit" name="ok"

    data-toggle="tooltip" data-placement="top"

    title="Modification de la ligne">

      <i class="text-center text-success fas fa-edit"></i>

</a>

</form>
