<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Tarea;
use Database\Factories\TareaFactory;


class TareaTest extends TestCase
{

    use RefreshDatabase;

    /**
     * Prueba para obtener todas las tareas.
     *
     * @return void
     */
    public function test_obtener_tareas()
{
    
    Tarea::factory()->count(3)->create();
    
    $response = $this->get('/api/tareas');

    
    $response->assertStatus(200)
        ->assertJsonCount(3 , 'data'); 
}

    /**
     * A basic feature test example.
     * 
     * @test 
     */
    public function test_crear_tarea()
    {
        $data = [
            'titulo' => 'Tarea prueba',
            'descripcion' => 'Descripción tarea prueba',
        ];

        $response = $this->postJson('/api/tareas', $data);

        $response->assertStatus(201);

        $this->assertDatabaseHas('tareas', $data);

        $response->assertJsonFragment($data);
    }

    /**
     * Prueba para actualizar una tarea existente.
     *
     * @return void
     */
    public function test_actualizar_tarea()
    {
        $tarea = Tarea::factory()->create(); 

        $data = [
            'titulo' => 'Nuevo título',
            'descripcion' => 'Nueva descripcion',
        ];

        $response = $this->putJson('/api/tareas/'.$tarea->id, $data);

        $response->assertStatus(200);
    }

    /**
     * Prueba para eliminar una tarea existente.
     *
     * @return void
     */
    public function test_eliminar_tarea()
    {
        $tarea = Tarea::factory()->create(); 

        $response = $this->delete('/api/tareas/'.$tarea->id);

        $response->assertStatus(204); 
    }
}
