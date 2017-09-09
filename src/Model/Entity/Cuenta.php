<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cuenta Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $cuenta
 * @property float $balance
 * @property int $usuario_id
 * @property \Cake\I18n\FrozenTime $creado
 * @property string $moneda
 * @property float $reserva
 *
 * @property \App\Model\Entity\Usuario $usuario
 * @property \App\Model\Entity\Beneficiario[] $beneficiarios
 * @property \App\Model\Entity\Transaccione[] $transacciones
 */
class Cuenta extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
