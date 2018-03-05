// SuperBlaze Navigation
var g_navEnabled = true;
var g_navMode = 2;
var g_navMinDolly = -0.6;
var g_navMaxDolly = 0.0;
var g_navSpeed = 5.0;
var g_navDecay = 0.25;

var g_navGotoPosFrames = 0;
var g_navGotoPosActive = false;
var g_navGotoPosQuatFrom = null;
var g_navGotoPosQuatTo = null;
var g_navGotoPosPanDelta = [0.0, 0.0];
var g_navGotoPosOnComplete = function() { };
var g_navDX = 0;
var g_navDY = 0;
var g_navMX = 0;
var g_navMY = 0;
var g_navXAng = 0;
var g_navYAng = 0;
var g_navDolly = 0.0;
var g_navMatLastView = null;
var g_navMatHierModel = null;
var g_navPan = [0.0, 0.0];
var g_navQuat = new Object;

// Mode 2 Nav
var g_navDXAng = 0;
var g_navDYAng = 0;
var g_navDPan = [0,0];
var g_navDDolly = 0;
var g_navPanDolly = -0.6;
var g_navMode2DecayDown = 0.1;
var g_navMode2DecayUp = 0.9;
var g_navMode2Speed = 0.06;
var g_navChange = false;

var panMax = [0.5, 0.4];   //[left, bottom]
var panMin = [-0.4, -0.4]; //[right, top]
var M_PI = 3.1415926535897932384626433832795028841968;

function MatrixRotationAxis(fAngle, fX, fY, fZ) {
    var s = Math.sin(fAngle);
    var c = Math.cos(fAngle);
    var x = fX;
    var y = fY;
    var z = fZ;

    var mOut = Array();
    mOut[0] = x * x * (1 - c) + c;
    mOut[4] = x * y * (1 - c) - (z * s);
    mOut[8] = x * z * (1 - c) + (y * s);
    mOut[12] = 0;

    mOut[1] = y * x * (1 - c) + (z * s);
    mOut[5] = y * y * (1 - c) + c;
    mOut[9] = y * z * (1 - c) - (x * s);
    mOut[13] = 0;

    mOut[2] = z * x * (1 - c) - (y * s);
    mOut[6] = z * y * (1 - c) + (x * s);
    mOut[10] = z * z * (1 - c) + c;
    mOut[14] = 0.0;

    mOut[3] = 0.0;
    mOut[7] = 0.0;
    mOut[11] = 0.0;
    mOut[15] = 1.0;
    return mOut;
}

function MatrixTranslation(fX, fY, fZ) {
    var mOut = Array();
    mOut[0] = 1.0; mOut[4] = 0.0; mOut[8] = 0.0; mOut[12] = fX;
    mOut[1] = 0.0; mOut[5] = 1.0; mOut[9] = 0.0; mOut[13] = fY;
    mOut[2] = 0.0; mOut[6] = 0.0; mOut[10] = 1.0; mOut[14] = fZ;
    mOut[3] = 0.0; mOut[7] = 0.0; mOut[11] = 0.0; mOut[15] = 1.0;
    return mOut;
}

function MatrixInvert(m) {
    var r = new Array();
    var det = m[3] * m[6] * m[9] * m[12] - m[2] * m[7] * m[9] * m[12] - m[3] * m[5] * m[10] * m[12] + m[1] * m[7] * m[10] * m[12] +
		m[2] * m[5] * m[11] * m[12] - m[1] * m[6] * m[11] * m[12] - m[3] * m[6] * m[8] * m[13] + m[2] * m[7] * m[8] * m[13] +
		m[3] * m[4] * m[10] * m[13] - m[0] * m[7] * m[10] * m[13] - m[2] * m[4] * m[11] * m[13] + m[0] * m[6] * m[11] * m[13] +
		m[3] * m[5] * m[8] * m[14] - m[1] * m[7] * m[8] * m[14] - m[3] * m[4] * m[9] * m[14] + m[0] * m[7] * m[9] * m[14] +
		m[1] * m[4] * m[11] * m[14] - m[0] * m[5] * m[11] * m[14] - m[2] * m[5] * m[8] * m[15] + m[1] * m[6] * m[8] * m[15] +
		m[2] * m[4] * m[9] * m[15] - m[0] * m[6] * m[9] * m[15] - m[1] * m[4] * m[10] * m[15] + m[0] * m[5] * m[10] * m[15];
    if (det != 0) {
        var invdet = 1.0 / (det);
        (r)[0] = (m[6] * m[11] * m[13] - m[7] * m[10] * m[13] + m[7] * m[9] * m[14] - m[5] * m[11] * m[14] - m[6] * m[9] * m[15] + m[5] * m[10] * m[15]) * invdet;
        (r)[1] = (m[3] * m[10] * m[13] - m[2] * m[11] * m[13] - m[3] * m[9] * m[14] + m[1] * m[11] * m[14] + m[2] * m[9] * m[15] - m[1] * m[10] * m[15]) * invdet;
        (r)[2] = (m[2] * m[7] * m[13] - m[3] * m[6] * m[13] + m[3] * m[5] * m[14] - m[1] * m[7] * m[14] - m[2] * m[5] * m[15] + m[1] * m[6] * m[15]) * invdet;
        (r)[3] = (m[3] * m[6] * m[9] - m[2] * m[7] * m[9] - m[3] * m[5] * m[10] + m[1] * m[7] * m[10] + m[2] * m[5] * m[11] - m[1] * m[6] * m[11]) * invdet;
        (r)[4] = (m[7] * m[10] * m[12] - m[6] * m[11] * m[12] - m[7] * m[8] * m[14] + m[4] * m[11] * m[14] + m[6] * m[8] * m[15] - m[4] * m[10] * m[15]) * invdet;
        (r)[5] = (m[2] * m[11] * m[12] - m[3] * m[10] * m[12] + m[3] * m[8] * m[14] - m[0] * m[11] * m[14] - m[2] * m[8] * m[15] + m[0] * m[10] * m[15]) * invdet;
        (r)[6] = (m[3] * m[6] * m[12] - m[2] * m[7] * m[12] - m[3] * m[4] * m[14] + m[0] * m[7] * m[14] + m[2] * m[4] * m[15] - m[0] * m[6] * m[15]) * invdet;
        (r)[7] = (m[2] * m[7] * m[8] - m[3] * m[6] * m[8] + m[3] * m[4] * m[10] - m[0] * m[7] * m[10] - m[2] * m[4] * m[11] + m[0] * m[6] * m[11]) * invdet;
        (r)[8] = (m[5] * m[11] * m[12] - m[7] * m[9] * m[12] + m[7] * m[8] * m[13] - m[4] * m[11] * m[13] - m[5] * m[8] * m[15] + m[4] * m[9] * m[15]) * invdet;
        (r)[9] = (m[3] * m[9] * m[12] - m[1] * m[11] * m[12] - m[3] * m[8] * m[13] + m[0] * m[11] * m[13] + m[1] * m[8] * m[15] - m[0] * m[9] * m[15]) * invdet;
        (r)[10] = (m[1] * m[7] * m[12] - m[3] * m[5] * m[12] + m[3] * m[4] * m[13] - m[0] * m[7] * m[13] - m[1] * m[4] * m[15] + m[0] * m[5] * m[15]) * invdet;
        (r)[11] = (m[3] * m[5] * m[8] - m[1] * m[7] * m[8] - m[3] * m[4] * m[9] + m[0] * m[7] * m[9] + m[1] * m[4] * m[11] - m[0] * m[5] * m[11]) * invdet;
        (r)[12] = (m[6] * m[9] * m[12] - m[5] * m[10] * m[12] - m[6] * m[8] * m[13] + m[4] * m[10] * m[13] + m[5] * m[8] * m[14] - m[4] * m[9] * m[14]) * invdet;
        (r)[13] = (m[1] * m[10] * m[12] - m[2] * m[9] * m[12] + m[2] * m[8] * m[13] - m[0] * m[10] * m[13] - m[1] * m[8] * m[14] + m[0] * m[9] * m[14]) * invdet;
        (r)[14] = (m[2] * m[5] * m[12] - m[1] * m[6] * m[12] - m[2] * m[4] * m[13] + m[0] * m[6] * m[13] + m[1] * m[4] * m[14] - m[0] * m[5] * m[14]) * invdet;
        (r)[15] = (m[1] * m[6] * m[8] - m[2] * m[5] * m[8] + m[2] * m[4] * m[9] - m[0] * m[6] * m[9] - m[1] * m[4] * m[10] + m[0] * m[5] * m[10]) * invdet;
    }
    return r;
}

function QuaternionFromRotationMatrix(m) {
    var m11 = m[0], m12 = m[4], m13 = m[8],
		m21 = m[1], m22 = m[5], m23 = m[9],
		m31 = m[2], m32 = m[6], m33 = m[10],
		trace = m11 + m22 + m33, s;
    if (trace > 0) {
        s = 0.5 / Math.sqrt(trace + 1.0);
        g_navQuat.w = 0.25 / s;
        g_navQuat.x = (m32 - m23) * s;
        g_navQuat.y = (m13 - m31) * s;
        g_navQuat.z = (m21 - m12) * s;
    } else if (m11 > m22 && m11 > m33) {
        s = 2.0 * Math.sqrt(1.0 + m11 - m22 - m33);
        g_navQuat.w = (m32 - m23) / s;
        g_navQuat.x = 0.25 * s;
        g_navQuat.y = (m12 + m21) / s;
        g_navQuat.z = (m13 + m31) / s;
    } else if (m22 > m33) {
        s = 2.0 * Math.sqrt(1.0 + m22 - m11 - m33);
        g_navQuat.w = (m13 - m31) / s;
        g_navQuat.x = (m12 + m21) / s;
        g_navQuat.y = 0.25 * s;
        g_navQuat.z = (m23 + m32) / s;
    } else {
        s = 2.0 * Math.sqrt(1.0 + m33 - m11 - m22);
        g_navQuat.w = (m21 - m12) / s;
        g_navQuat.x = (m13 + m31) / s;
        g_navQuat.y = (m23 + m32) / s;
        g_navQuat.z = 0.25 * s;
    }
}

function QuatSlerp(qa, qb, qm, t) {
    var cosHalfTheta = qa.w * qb.w + qa.x * qb.x + qa.y * qb.y + qa.z * qb.z;
    if (cosHalfTheta < 0) {
        qm.w = -qb.w;
        qm.x = -qb.x;
        qm.y = -qb.y;
        qm.z = -qb.z;
        cosHalfTheta = -cosHalfTheta;
    } else {
        qm.w = qb.w;
        qm.x = qb.x;
        qm.y = qb.y;
        qm.z = qb.z;
    }
    if (Math.abs(cosHalfTheta) >= 1.0) {
        qm.w = qa.w;
        qm.x = qa.x;
        qm.y = qa.y;
        qm.z = qa.z;
        return qm;
    }
    var halfTheta = Math.acos(cosHalfTheta);
    var sinHalfTheta = Math.sqrt(1.0 - cosHalfTheta * cosHalfTheta);
    if (Math.abs(sinHalfTheta) < 0.001) {
        qm.w = 0.5 * (qa.w + qm.w);
        qm.x = 0.5 * (qa.x + qm.x);
        qm.y = 0.5 * (qa.y + qm.y);
        qm.z = 0.5 * (qa.z + qm.z);
        return qm;
    }
    var ratioA = Math.sin((1 - t) * halfTheta) / sinHalfTheta;
    var ratioB = Math.sin(t * halfTheta) / sinHalfTheta;
    qm.w = (qa.w * ratioA + qm.w * ratioB);
    qm.x = (qa.x * ratioA + qm.x * ratioB);
    qm.y = (qa.y * ratioA + qm.y * ratioB);
    qm.z = (qa.z * ratioA + qm.z * ratioB);
    return qm;
}

function NavStartGotoPos(yang, xang, xpan, ypan, dolly, numFrames, onComplete) {
    if (g_navMode == 1)
        return; // Not Supported, use NavStartGotoPosQuat
    if (onComplete !== undefined)
        g_navGotoPosOnComplete = onComplete;

    while (yang < -M_PI) yang += 2 * M_PI;
    while (yang > M_PI) yang -= 2 * M_PI;

    g_navGotoPosActive = true;
    g_navGotoPosFrames = numFrames;
    var gotoposDelta = 1.0 / g_navGotoPosFrames;

    g_navGotoPosDelta = new Object();
    // Rotation
    g_navGotoPosDelta.navXAng = gotoposDelta * (xang - g_navXAng);
    var yangDiff1 = yang - g_navYAng;
    var yangDiff2 = (2 * M_PI + yang) - g_navYAng;
    if (Math.abs(yangDiff1) < Math.abs(yangDiff2))
        g_navGotoPosDelta.navYAng = gotoposDelta * yangDiff1;
    else
        g_navGotoPosDelta.navYAng = gotoposDelta * yangDiff2;
    // Pan
    if (isNaN(xpan))
        g_navGotoPosDelta.navXPan = 0.0;
    else
        g_navGotoPosDelta.navXPan = gotoposDelta * (xpan - g_navPan[0]);
    if (isNaN(ypan))
        g_navGotoPosDelta.navYPan = 0.0;
    else
        g_navGotoPosDelta.navYPan = gotoposDelta * (ypan - g_navPan[1]);
    // Zoom
    g_navGotoPosDelta.navDolly = gotoposDelta * (dolly - g_navDolly);
}

function NavStartGotoPosQuat(qw, qx, qy, qz, xpan, ypan, dolly, numFrames, onComplete) {
    if (g_navMode == 0)
        return; // Not Supported, use NavStartGotoPos
    if (onComplete !== undefined)
        g_navGotoPosOnComplete = onComplete;

    g_navGotoPosActive = true;
    g_navGotoPosFrames = numFrames;

    g_navGotoPosDelta = new Object();
    g_navGotoPosDelta.fraction = 1.0 / g_navGotoPosFrames;
    g_navGotoPosDelta.framesSoFar = 0;
    // Rotation
    g_navGotoPosDelta.qb = new Object();
    g_navGotoPosDelta.qb.x = qx;
    g_navGotoPosDelta.qb.y = qy;
    g_navGotoPosDelta.qb.z = qz;
    g_navGotoPosDelta.qb.w = qw;
    g_navGotoPosDelta.qm = new Object();
    // Pan
    if (isNaN(xpan))
        g_navGotoPosDelta.navXPan = 0.0;
    else
        g_navGotoPosDelta.navXPan = (xpan - g_navPan[0]);
    g_navGotoPosDelta.prevXPan = g_navPan[0];
    if (isNaN(ypan))
        g_navGotoPosDelta.navYPan = 0.0;
    else
        g_navGotoPosDelta.navYPan = (ypan - g_navPan[1]);
    g_navGotoPosDelta.prevYPan = g_navPan[1];
    // Zoom
    g_navGotoPosDelta.navDolly = (dolly - g_navDolly);
    g_navGotoPosDelta.prevDolly = g_navDolly;
}
var clickEventActive = true;
function NavCreateViewMatrix(initialViewMatrix) {
    g_navMatLastView = initialViewMatrix;
    if (g_navMode == 0 || g_navMode == 2) {    
    	if (g_navMode == 2) {
    		var decay = (mdown || g_navChange) ? g_navMode2DecayDown : g_navMode2DecayUp;
    		g_navChange = false;
			g_navDXAng *= decay;
			g_navDYAng *= decay;
			g_navDPan[0] *= decay;
			g_navDPan[1] *= decay;
			g_navDDolly *= decay;
              
			if (Math.abs(g_navDXAng) < 0.001) g_navDXAng = 0;
			if (Math.abs(g_navDYAng) < 0.001) g_navDYAng = 0;
			if (Math.abs(g_navDPan[0]) < 0.001) g_navDPan[0] = 0;
			if (Math.abs(g_navDPan[1]) < 0.001) g_navDPan[1] = 0;
			if (Math.abs(g_navDDolly) < 0.001) g_navDDolly = 0;
            
            if (g_navDXAng != 0.0 || g_navDYAng != 0.0 || g_navDPan[0] != 0.0 || g_navDPan[1] != 0.0 || g_navDDolly != 0.0) {
    			// Rotation
                //console.log("if clickEventActive == " + clickEventActive);
                clickEventActive = false;
                
                g_navXAng += g_navDXAng;
		        g_navYAng += g_navDYAng;
		        var fRotLimit = M_PI*0.36;
                var fRotMinLimit = -M_PI*0.60;
                /*if (g_navXAng > fRotLimit)
                    g_navXAng = fRotLimit;
                else if (g_navXAng < fRotMinLimit)
                    g_navXAng = fRotMinLimit;*/

                if (g_navXAng > M_PI)
                    g_navXAng = -M_PI;
                if (g_navXAng < -M_PI)
                    g_navXAng = M_PI;

                while (g_navYAng < 0.0) g_navYAng += 2 * M_PI;
                while (g_navYAng > 2 * M_PI) g_navYAng -= 2 * M_PI;
		        // Pan
		        g_navPan[0] += g_navDPan[0];
		        g_navPan[1] += g_navDPan[1];
        		if (g_navPan[0] > panMax[0]) g_navPan[0] = panMax[0];
			    if (g_navPan[1] > panMax[1]) g_navPan[1] = panMax[1];
			    if (g_navPan[0] < panMin[0]) g_navPan[0] = panMin[0];
			    if (g_navPan[1] < panMin[1]) g_navPan[1] = panMin[1];
			    // Dolly
			    g_navDolly += g_navDDolly;
			    if (g_navDolly < g_navMinDolly)
			        g_navDolly = g_navMinDolly;
			    else if (g_navDolly > g_navMaxDolly)
			        g_navDolly = g_navMaxDolly;
				//
				scene.clearRefine();
			}else {
                //console.log("else clickEventActive == " + clickEventActive);
                clickEventActive = true;
            }
    	}
        if (g_navGotoPosActive) {
            if (g_navGotoPosFrames < 1)
                g_navGotoPosFrames = 1;

            g_navXAng += g_navGotoPosDelta.navXAng;
            g_navYAng += g_navGotoPosDelta.navYAng;
            g_navPan[0] += g_navGotoPosDelta.navXPan;
            g_navPan[1] += g_navGotoPosDelta.navYPan;
            g_navDolly += g_navGotoPosDelta.navDolly;

            // Rotation
            mTmp = MatrixRotationAxis(g_navYAng, 0.0, 1.0, 0.0);
            g_navMatLastView = MatrixMultiply(g_navMatLastView, mTmp);
            mTmp = MatrixRotationAxis(-g_navXAng, g_navMatLastView[0], g_navMatLastView[1], g_navMatLastView[2]);
            g_navMatLastView = MatrixMultiply(g_navMatLastView, mTmp);
            // Zoom
            mTmp = MatrixTranslation(g_navMatLastView[8] * g_navDolly, g_navMatLastView[9] * g_navDolly, g_navMatLastView[10] * g_navDolly);
            g_navMatLastView = MatrixMultiply(g_navMatLastView, mTmp);

            g_navGotoPosFrames -= 1;
            if (g_navGotoPosFrames == 0) {
                g_navGotoPosDelta = null;
                g_navGotoPosActive = false;
                g_navGotoPosOnComplete();
                g_navGotoPosOnComplete = function() { };
                //NavOnDoneAnim();
            }
        } else {
            // Rotation
            mTmp = MatrixRotationAxis(g_navYAng, 0.0, 1.0, 0.0);
            g_navMatLastView = MatrixMultiply(g_navMatLastView, mTmp);
            mTmp = MatrixRotationAxis(-g_navXAng, g_navMatLastView[0], g_navMatLastView[1], g_navMatLastView[2]);
            g_navMatLastView = MatrixMultiply(g_navMatLastView, mTmp);
            // Zoom
            mTmp = MatrixTranslation(g_navMatLastView[8] * g_navDolly, g_navMatLastView[9] * g_navDolly, g_navMatLastView[10] * g_navDolly);
            g_navMatLastView = MatrixMultiply(g_navMatLastView, mTmp);
        }
    } else {
        // Zoom
        mTmp = MatrixTranslation(g_navMatLastView[8] * g_navDolly, g_navMatLastView[9] * g_navDolly, g_navMatLastView[10] * g_navDolly);
        g_navMatLastView = MatrixMultiply(g_navMatLastView, mTmp);

        if (g_navGotoPosActive) {
            if (g_navGotoPosFrames == 1) {
                //NavOnDoneAnim();
            }
        }
    }
    return g_navMatLastView;
}

function NavCreateModelMatrix(initialViewMatrix) {
    if (g_navMatHierModel == null)
        g_navMatHierModel = superblaze_identity.slice(0);
    if (g_navMode == 1) {
        if (g_navGotoPosActive) {
            if (g_navGotoPosFrames < 1)
                g_navGotoPosFrames = 1;
            g_navGotoPosDelta.framesSoFar++;

            var t = g_navGotoPosDelta.fraction * g_navGotoPosDelta.framesSoFar;
            var thefraction = Math.sin(t * 3.14159 * 0.5);
            g_navPan[0] = g_navGotoPosDelta.prevXPan + thefraction * g_navGotoPosDelta.navXPan;
            g_navPan[1] = g_navGotoPosDelta.prevYPan + thefraction * g_navGotoPosDelta.navYPan;
            g_navDolly = g_navGotoPosDelta.prevDolly + thefraction * g_navGotoPosDelta.navDolly;

            QuatSlerp(g_navQuat, g_navGotoPosDelta.qb, g_navGotoPosDelta.qm, t);
            g_navQuat.w = g_navGotoPosDelta.qm.w;
            g_navQuat.x = g_navGotoPosDelta.qm.x;
            g_navQuat.y = g_navGotoPosDelta.qm.y;
            g_navQuat.z = g_navGotoPosDelta.qm.z;

            var x = g_navQuat.x, y = g_navQuat.y, z = g_navQuat.z, w = g_navQuat.w;
            var x2 = x + x, y2 = y + y, z2 = z + z;
            var xx = x * x2, xy = x * y2, xz = x * z2;
            var yy = y * y2, yz = y * z2, zz = z * z2;
            var wx = w * x2, wy = w * y2, wz = w * z2;

            g_navMatHierModel[0] = 1 - (yy + zz);
            g_navMatHierModel[4] = xy - wz;
            g_navMatHierModel[8] = xz + wy;

            g_navMatHierModel[1] = xy + wz;
            g_navMatHierModel[5] = 1 - (xx + zz);
            g_navMatHierModel[9] = yz - wx;

            g_navMatHierModel[2] = xz - wy;
            g_navMatHierModel[6] = yz + wx;
            g_navMatHierModel[10] = 1 - (xx + yy);

            g_navGotoPosFrames -= 1;
            if (g_navGotoPosFrames == 0) {
                g_navGotoPosDelta = null;
                g_navGotoPosActive = false;
                g_navGotoPosOnComplete();
                g_navGotoPosOnComplete = function() { };
            }
        } else {
            var coffx = (g_navMX - _midx);
            var coffy = (g_navMY - _midy);
            var mouserad = Math.sqrt(coffx * coffx + coffy * coffy);
            var mousespeed = Math.sqrt(g_navDX * g_navDX + g_navDY * g_navDY);

            if (mousespeed < 0.001)
                mousespeed = 0.001;

            // find radial and circumferential components
            var radx = (g_navMX - _midx) / (mouserad + 1.0);
            var rady = (g_navMY - _midy) / (mouserad + 1.0);
            var cirx = rady;
            var ciry = -radx;
            var circum = g_navDX * cirx + g_navDY * ciry * 0.1; //circumferential component of velocity
            var radial = g_navDX * radx + g_navDY * rady; //radial component of velocity
            if (radial < 0.0)
                radial = -radial;
            radial *= g_navSpeed;
            radial /= (180.0 * M_PI);
            circum *= g_navSpeed;
            circum /= (180.0 * M_PI);
            if (radial > 0 || circum > 0) {
                var mouseMoveInX = g_navDX / mousespeed;
                var mouseMoveInY = g_navDY / mousespeed;
                var zAngle = Math.acos(mouseMoveInY);
                if (mouseMoveInX < 0.0)
                    zAngle = (M_PI * 2.0) - zAngle;
                // apply radial and circumferential components to root hierarchical matrix
                var mTmp = MatrixRotationAxis(-zAngle, initialViewMatrix[8], initialViewMatrix[9], initialViewMatrix[10]);
                g_navMatHierModel = MatrixMultiply(g_navMatHierModel, mTmp);
                mTmp = MatrixRotationAxis(radial, initialViewMatrix[0], initialViewMatrix[1], initialViewMatrix[2]);
                g_navMatHierModel = MatrixMultiply(g_navMatHierModel, mTmp);
                mTmp = MatrixRotationAxis(zAngle, initialViewMatrix[8], initialViewMatrix[9], initialViewMatrix[10]);
                g_navMatHierModel = MatrixMultiply(g_navMatHierModel, mTmp);
                mTmp = MatrixRotationAxis(circum, initialViewMatrix[8], initialViewMatrix[9], initialViewMatrix[10]);
                g_navMatHierModel = MatrixMultiply(g_navMatHierModel, mTmp);
                // Update Quaternion values
                QuaternionFromRotationMatrix(g_navMatHierModel);
                scene.clearRefine();
            }
            // (Momentum) decay cursor delta
            g_navDX *= g_navDecay;
            g_navDY *= g_navDecay;
            if (Math.abs(g_navDX) < 1.0 && Math.abs(g_navDY) < 1.0) {
                g_navDX = g_navDY = 0;  // clear cursor delta
            }
        }
    }
    return g_navMatHierModel;
}

function NavInit(w, h) {
    // calculate navigation variables
    g_navMX = _midx = w / 2;
    g_navMY = _midy = h / 2;
    return true;
}

function NavChangeDolly(delta) {
    if (!g_navEnabled)
        return false;
        
    if (g_navMode == 2) {
    	g_navDDolly -= delta * g_navMode2Speed*30;
        g_navChange = true;
    } else {
	    g_navDolly -= delta;
	    if (g_navDolly < g_navMinDolly)
	        g_navDolly = g_navMinDolly;
	    else if (g_navDolly > g_navMaxDolly)
	        g_navDolly = g_navMaxDolly;
	}
    return true;
}

function NavRotation(mpos, mdelta) {
    if (!g_navEnabled)
        return false;

	if (g_navMode == 2) {

		if (g_navDolly <= g_navPanDolly)
			return NavPan(mdelta);
		g_navDXAng -= mdelta[1] * g_navMode2Speed;
        g_navDYAng += mdelta[0] * g_navMode2Speed;
        g_navChange = true;
	}
    else if (g_navMode == 1) {
        g_navMX = mpos[0]; g_navMY = mpos[1];
        g_navDX = -mdelta[0]; g_navDY = -mdelta[1];
    }
    else {

        g_navXAng -= mdelta[1] / 30.0;
        g_navYAng += mdelta[0] / 30.0;
        var fRotLimit = M_PI*0.36;
        var fRotMinLimit = -M_PI*0.60;
        /*if (g_navXAng > fRotLimit)
            g_navXAng = fRotLimit;
        else if (g_navXAng < fRotMinLimit)
            g_navXAng = fRotMinLimit;*/

        if (g_navXAng > M_PI)
            g_navXAng = -M_PI;
        if (g_navXAng < -M_PI)
            g_navXAng = M_PI;

        while (g_navYAng < 0.0) g_navYAng += 2 * M_PI;
        while (g_navYAng > 2 * M_PI) g_navYAng -= 2 * M_PI;
    }
    return true;
}


function NavPan(mdelta) {
    if (!g_navEnabled)
        return false;
        
    if (g_navMode == 2) {
    	g_navDPan[0] += mdelta[0] * g_navMode2Speed;
    	g_navDPan[1] -= mdelta[1] * g_navMode2Speed;
        g_navChange = true;
    }
    else {
	    g_navPan[0] += mdelta[0] / 50000.0;
	    g_navPan[1] -= mdelta[1] / 50000.0;
		
		if (g_navPan[0] > panMax[0]) g_navPan[0] = panMax[0];
	    if (g_navPan[1] > panMax[1]) g_navPan[1] = panMax[1];
	    if (g_navPan[0] < panMin[0]) g_navPan[0] = panMin[0];
	    if (g_navPan[1] < panMin[1]) g_navPan[1] = panMin[1];
    }
	
    return true;
}