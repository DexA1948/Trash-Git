/*program to implement horizontal and vertical lines*/
#include<GL/glut.h>
#include<stdlib.h>
void myInit(void)
{
glClearColor(2.0,2.0,2.0,4.0);
glColor3f(0.0f,0.0f,0.0f);
glLineWidth(4.0);
glMatrixMode(GL_PROJECTION);
glLoadIdentity();
gluOrtho2D(0.0,640.0,0.0,480.0);
}
void drawLineInt(GLint x1,GLint y1,GLint x2,GLint y2)
{
glBegin(GL_LINES);
glVertex2i(x1,y1);
glVertex2i(x2,y2);
glEnd();
}
void display(void)
{
glClear(GL_COLOR_BUFFER_BIT);
glBegin(GL_LINES);
glVertex2i(100,200);
glVertex2i(400,200);
glVertex2i(200,100);
glVertex2i(200,400);
glEnd();
glFlush();
}
void main(int argc, char** argv)
{
glutInit(&argc,argv);
glutInitDisplayMode(GLUT_SINGLE | GLUT_RGB);
glutInitWindowSize(500,500);
glutInitWindowPosition(100,150);
glutCreateWindow("Intro OpenGL");
glutDisplayFunc(display);
myInit();
drawLineInt(100,200,40,60);
glutMainLoop();
}
