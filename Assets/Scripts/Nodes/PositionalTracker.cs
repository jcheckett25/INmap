using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class PositionalTracker : MonoBehaviour
{
    // Start is called before the first frame update
    public Transform player;

	private Vector2 playerPos = Vector2.zero;

	public Vector2 GetPosition () {
        playerPos.x = player.position.x;
        playerPos.y = player.position.z;
        return playerPos;
	}
}
