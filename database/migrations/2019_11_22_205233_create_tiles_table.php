<?php
//\database\migrations\2019_11_22_205233_create_tiles_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(TileSpec::TABLE, function (Blueprint $table) {
            $table->bigIncrements(TileSpec::ID);
            $table->string(TileSpec::KIND, 64)->default('corridor');
            $table->string(TileSpec::IMAGE, 64);
            $table->json(TileSpec::OPENINGS); //in default position [t,r,b,l] like in css
            $table->json(TileSpec::STATS)->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiles');
    }
}
